<?php

namespace  App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Images_product;
use App\Models\Products;
use App\Models\Account;
use App\Models\Contacts;
use App\Models\Order_product;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Product\ProductRepository;
use App\Models\Role;
use App\Models\User;
use App\Models\Users;
use Mail;

class DashBoardController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mess = $request->input('mess');
        $phone = $request->input('phone');
        $data = [
            'email' => $email,
            'phone' => $phone,
        ];
        $dete = [
            'mess' => $mess,
            'account_id' => session('account_id'),
        ];
        Contacts::create($dete);


        Users::where('account_id', session('account_id'))->update($data);



        return redirect('/success');
    }
    public function success()
    {
        return view('/user/dashboard/success');
    }

    public function index()
    {
        $data = [
            'category' => Category::get(),
            'products' => Products::get()
        ];
        $data = [
            'products' =>
            DB::table('products')->orderBy('created_at', 'desc')->take(12)->get(),

        ];

        return view('user/dashboard/index')->with($data);
    }

    //public function search(Request $request)
    //{
    //  $keyword = $request->get('search');
    //  $data = [
    //      'category' => Category::get(),
    //      'products' => Products::where('name', 'like', '%' . $keyword . '%')->get()
    //  ];
    //   view('user/dashboard/shop/layout')->with($data);
    //    return view('user/dashboard/shop/shop')->with($data);
    //}
    public function blog()
    {
        return view('user/dashboard/blog');
    }
    public function blogrm()
    {
        return view('user/dashboard/blogrm');
    }
    public function blogrm1()
    {
        return view('user/dashboard/blogrm1');
    }
    public function blogrm2()
    {
        return view('user/dashboard/blogrm2');
    }
    public function contacts()
    {
        return view('user/dashboard/contacts');
    }
    public function aboutus()
    {
        return view('user/pages/aboutus');
    }
    public function shoppingcart()
    {
        return view('user/pages/shoppingcart');
    }
    public function details($id)
    {
        $products_categogy_id = DB::table('products')->where('id', $id)->value('categogy_id');

        $data = [
            'category' => Category::all(),
            'product' => Products::find($id),
            'imgs' => Images_product::where('product_id', '=', $id)->get(),
            'products_c' => DB::table('products')->where('categogy_id', $products_categogy_id)->get(),

        ];
        view('user/dashboard/shop/layout')->with($data);
        return view('user/dashboard/shop/shopdetails')->with($data);
    }
    

    

    public function signin()
    {
        return view('user/dashboard/login/signin');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('role_id');
        $request->session()->forget('account_id');
        $request->session()->forget('username');
        $request->session()->forget('cart');

        return redirect('login/signin');
    }
    public function signincheck(Request $request)
    {
        $username = trim($request->input('name'));
        $password = trim($request->input('password'));

        $account = Account::where('name', '=', $username)->first();
        if ($account) {
            if (Hash::check($password, $account->password)) {
                $user = Auth::loginUsingId($account->id);
                $request->session($user);
                $request->session()->put('role_id', $account->role_id);
                $request->session()->put('account_id', $account->id);
                $request->session()->put('username', $account->name);
                if (($account->role_id) == 2) {

                    return redirect('/');
                } elseif (($account->role_id) == 1) {
                    return redirect('/admin/home');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid Username or Password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }
    // public function signiancheck(Request $request)
    // {
    //     $username = trim($request->input('name'));
    //     $password = trim($request->input('password'));

    //     $account = Account::where('name', '=', $username)->first();
    //     if ($account) {
    //         if (password_verify($password, $account->password) || ($account->password == $password)) {
    //             $request->session()->put('role_id', $account->role_id);
    //             $request->session()->put('account_id', $account->id);
    //             $request->session()->put('username', $account->name);

    //             if (password_verify($password, $account->password)) {
    //                 $user = Auth::user();
    //                 session(['user' => $user]);
    //                 return redirect('/')->route('index');
    //             } else {
    //                 return redirect()->back()->with('error', 'Invalid Username or Password');
    //             }
    //         } else {
    //             return redirect()->back()->with('error', 'Invalid credentials');
    //         }
    //     }
    // }

    public function account()
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->get(),
        ];
        // print_r($data['user']);
        // echo  session('account_id');
        return view('user/dashboard/info')->with($data);
    }


    public function shop_cart()
    {
        $user_id = DB::table('users')->where('account_id', '=', session('user_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->value('id');
        $order_product = DB::table('order_product')->where('order_id', '=', $order_id)->get();
        $product = [[]];
        $id = 0;
        foreach ($order_product as $item) {
            if ($id > 0) {
                foreach ($product as $x) {
                    if ($x['id'] == $item->product_id) {
                        continue;
                    };
                }
            }
            $product[$id] = [
                'id' => DB::table('products')->where('id', '=', $item->product_id)->value('id'),
                'name' => DB::table('products')->where('id', '=', $item->product_id)->value('name'),
                'price' => DB::table('products')->where('id', '=', $item->product_id)->value('price'),
                'quantity' => $item->quantity_product_order,
                'photo' => DB::table('products')->where('id', '=', $item->product_id)->value('photo'),
            ];
            $id++;
        };

        echo print_r($product);
        // $idd= $order_products[2]['product_id'];
        // return view('/user/pages/shoppingcart',compact('product'));
    }


    public function test($id)
    {
        $data = [
            'product' => Products::find($id)
        ];

        return view('user/dashboard/test')->with($data);
    }
    public function testt($id)
    {
        $data = [
            'product' => Products::find($id)
        ];
        return view('user/dashboard/testt')->with($data);
    }
    public function signup()
    {
        return view('user/dashboard/login/signup');
    }

    public function add(Request $request)
    {
        $role = Role::where('permission', 'User')->value('id');
        $account = [
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $role,
            'email' => $request->input('email'),
            'created' => now()->format('Y-m-d'),
            'update' => now()->format('Y-m-d'),
        ];
        Account::create($account);

        $id_acc = Account::orderBy('id', 'desc')->take(1)->value('id');
        $user = [
            'account_id' => $id_acc,
            'email' => $request->input('email'),
        ];
        Users::create($user);

        /* $contacts = [
            'account_id' => $id_acc,
            'mess' => '',
        ];
        Contacts::create($contacts); */



        $id_user = Users::orderBy('id', 'desc')->take(1)->value('id');
        // $order = [
        //     'user_id' => $id_user,
        //     'status' => 0,
        // ];

        // Orders::create($order);

        return redirect('/');
    }
    public function update(Request $request)
    {
        $user1 = [
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 'User',
            'email' => $request->input('email'),
            'created' => now()->format('Y-m-d'),
            'update' => now()->format('Y-m-d'),
        ];
        $id = $request->input('id');
        Account::find($id)->update($user1);
        return redirect('user/userprofile');
    }
    public function new()
    {
        $data = [
            'products' =>
            DB::table('products')->orderBy('update_at', 'desc')->get()
        ];
        print_r($data['products']->toArray());
        return view('/')->with($data);
    }

/* QuocDat Comment hehe*/
/* Check lai xem */
/* khong thay gi het */
/* Thanh tUna Comment hehe*/
/* QuocDat Comment hehe*/
/* Check lai xem */
/* khong thay gi het */
/* Thanh tUna Comment hehe*/
public function shop(Request $request)
    {
        $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
        $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
        $query->orderBy('created_at', 'desc');
        // Lấy danh sách sản phẩm đã phân trang
        
        $products = $query->paginate($perPage);   
        $data = [
                 'category' => Category::get(),
                 //'products' => Products::where('name', 'like', '%' . $keyword . '%')->get()
              ];
        
        
        view('user/dashboard/shop/layout')->with($data);
        //Truyền danh sách sản phẩm và các tham số phân trang tới view
        
        
        return view('user/dashboard/shop/shop', [
            'products' => $products,
        ])->with($data);
    }
    public function search(Request $request)
    {   $keyword = $request->get('search');
        $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
        $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
        $query->where('name', 'like', '%' . $keyword . '%')->get();
        // Lấy danh sách sản phẩm đã phân trang
        
        $products = $query->paginate($perPage);   
        $data = [
                 'category' => Category::get(),
              ];
        
        
        view('user/dashboard/shop/layout');
        //Truyền danh sách sản phẩm và các tham số phân trang tới view
        
        
        return view('user/dashboard/shop/shop', [
            'products' => $products,
        ])->with($data);
    }
    public function searchprice($id)
    {   
        if($id==1){
            $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
            $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
            $query->where('price','<',50)->get();
        // Lấy danh sách sản phẩm đã phân trang
        
            $products = $query->paginate($perPage);   
            $data = [
                 'category' => Category::get(),
              ];
                  view('user/dashboard/shop/layout');
                  return view('user/dashboard/shop/shop', [
                      'products' => $products,
                  ])->with($data);
        }elseif($id==2){
            $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
            $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
            $query->where('price','<',100)->where('price','>',50)->get();
        // Lấy danh sách sản phẩm đã phân trang
        
            $products = $query->paginate($perPage);   
            $data = [
                 'category' => Category::get(),
              ];
                  view('user/dashboard/shop/layout');
                  return view('user/dashboard/shop/shop', [
                      'products' => $products,
                  ])->with($data);
        }elseif($id==3){
            $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
            $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
            $query->where('price','<',150)->where('price','>',100)->get();
        // Lấy danh sách sản phẩm đã phân trang
        
            $products = $query->paginate($perPage);   
            $data = [
                 'category' => Category::get(),
              ];
                  view('user/dashboard/shop/layout');
                  return view('user/dashboard/shop/shop', [
                      'products' => $products,
                  ])->with($data);
        }else{
            $perPage = 8; 
            $query = Products::query();
            $query->where('price','>',150)->get();
            $products = $query->paginate($perPage);   
            $data = [
                 'category' => Category::get(),
              ];
                  view('user/dashboard/shop/layout');
                  return view('user/dashboard/shop/shop', [
                      'products' => $products,
                  ])->with($data);
        }
    }
    public function product_categogy($id)
    {    $perPage = 8; // Số sản phẩm hiển thị trên mỗi trang
        $query = Products::query();
        // Sắp xếp sản phẩm theo ngày tạo
        $query->join('category', 'products.categogy_id', '=', 'category.id')
        ->where('category.id', $id)
        ->select('products.id', 'products.name', 'products.quantity', 'products.price', 'products.photo')
        ->get();
        // Lấy danh sách sản phẩm đã phân trang
        
        $products = $query->paginate($perPage);   
        
        $data = [
            'category' => Category::all(),
            'imgs' => Images_product::where('product_id', '=', $id)->get(),
            'product' => DB::table('products')
                ->join('category', 'products.categogy_id', '=', 'category.id')
                ->where('category.id', $id)
                ->select('products.id', 'products.name', 'products.quantity', 'products.price', 'products.photo')
                ->get(),
            'products'=>$products,
        ];
        //   print_r($data['products']->toArray());
        view('user/dashboard/shop/layout')->with($data);
        return view('user/dashboard/shop/shop')->with($data);
    }
}
