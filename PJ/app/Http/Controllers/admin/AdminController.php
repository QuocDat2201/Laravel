<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use App\Models\Contacts;
use App\Models\Images_product;
use App\Models\Order_product;
use App\Models\Orders;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function Home()
    {
        $data = [
            'users' => Users::count(),
            'number' => Products::count(),
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];


        $orders = Users::join('orders', 'users.id', '=', 'orders.user_id')->orderBy('orders.id', 'DESC')->take(6)
            ->join('account', 'users.account_id', '=', 'account.id')
            ->select(
                'users.*',
                'orders.id as orderid',
                'orders.status as status',
                'orders.delivered as delivered',
                'account.name as username',
                'users.address as address',
            )
            ->get();

        $products = DB::table('products')->orderBy('id', 'DESC')->take(5)
            ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
            ->get();
        return view('Admin/MainPage/dashboard', ['products' => $products, 'orders' => $orders])->with($data);
    }

    public function Orders()
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];

        $orders = Users::join('orders', 'users.id', '=', 'orders.user_id')
            ->join('account', 'users.account_id', '=', 'account.id')
            ->select(
                'users.*',
                'orders.id as orderid',
                'orders.status as status',
                'orders.delivered as delivered',
                'account.name as username',
                'users.address as address',
            )
            ->orderBy('orders.id', 'Desc')
            ->paginate(8);


        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $orders = Users::orderBy('account.name', 'Asc')
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'name_za') {
                $orders = Users::orderBy('account.name', 'Desc')
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'address_az') {
                $orders = Users::orderBy('users.address', 'ASC')
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'address_za') {
                $orders = Users::orderBy('users.address', 'DESC')
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            }
        }

        if (isset($_GET['choose'])) {
            $choose = $_GET['choose'];

            if ($choose == 'paid') {
                $orders = Users::where('orders.status', '=', 1)
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($choose == 'unpaid') {
                $orders = Users::where('orders.status','=', 0)
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->join('account', 'users.account_id', '=', 'account.id')
                    ->select(
                        'users.*',
                        'orders.id as orderid',
                        'orders.status as status',
                        'orders.delivered as delivered',
                        'account.name as username',
                        'users.address as address',
                    )
                    ->paginate(8)->appends(request()->query());
            }
        }
        return view('Admin/MainPage/orders', ['orders' => $orders])->with($data);
    }

    public function Order_Details($id)
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $order_products = DB::table('order_product')->where('order_id', $id)
            ->join('orders', 'order_product.order_id', '=', 'orders.id')
            ->join('products', 'order_product.product_id', '=', 'products.id')
            ->select(
                'order_product.*',
                'products.id as product_id',
                'products.name as product_name',
                'products.price as product_price',
                'products.photo as product_photo'
            )
            ->get();
        $orders = Users::join('orders', 'users.id', '=', 'orders.user_id')->where('orders.id', $id)
            ->join('account', 'users.account_id', '=', 'account.id')
            ->select(
                'users.*',
                'orders.id as orderid',
                'orders.status as payment',
                'orders.delivered as delivered',
                'account.name as username',
                'users.address as address',
                'users.phone as phone',
                'users.email as email',
            )
            ->distinct('users', 'orders')
            ->first();

        
        return view('Admin/MainPage/order_details', ['order_products' => $order_products], ['orders' => $orders])->with($data);
    }

    public function Product()
    { 
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $products = DB::table('products')->orderBy('id','Desc')
            ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
            ->paginate(8);
        $category = DB::table('category')
            ->get();

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $products = DB::table('products')->orderBy('name', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'name_za') {
                $products = DB::table('products')->orderBy('name', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'price_desc') {
                $products = DB::table('products')->orderBy('price', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'price_asc') {
                $products = DB::table('products')->orderBy('price', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'quantity_desc') {
                $products = DB::table('products')->orderBy('quantity', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'quantity_asc') {
                $products = DB::table('products')->orderBy('quantity', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'category_az') {
                $products = DB::table('products')->orderBy('category_name', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'category_za') {
                $products = DB::table('products')->orderBy('category_name', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            }
        }
        return view('Admin/MainPage/product', ['products' => $products, 'category' => $category])->with($data);
    }

    public function Category()
    {   
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $category = DB::table('category')
            ->select('category.*')
            ->get();

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $category = DB::table('category')->orderBy('name', 'ASC')
                    ->select('category.*')
                    ->get();
            } elseif ($sort_by == 'name_za') {
                $category = DB::table('category')->orderBy('name', 'DESC')
                    ->select('category.*')
                    ->get();
            }
        }
        return view('Admin/MainPage/category', ['categorys' => $category])->with($data);
    }

    public function Management()
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $products = DB::table('products')->orderBy('id','Desc')
            ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
            ->paginate(5);


        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $products = DB::table('products')->orderBy('name', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'name_za') {
                $products = DB::table('products')->orderBy('name', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'quantity_desc') {
                $products = DB::table('products')->orderBy('quantity', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'quantity_asc') {
                $products = DB::table('products')->orderBy('quantity', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'category_az') {
                $products = DB::table('products')->orderBy('category_name', 'ASC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'category_za') {
                $products = DB::table('products')->orderBy('category_name', 'DESC')
                    ->join('category', 'products.categogy_id', '=', 'category.id')->select('products.*', 'category.id as category_id', 'category.name as category_name')
                    ->paginate(5)->appends(request()->query());
            }
        }
        return view('Admin/MainPage/management', ['products' => $products])->with($data);
    }

    public function Users()
    {   
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $account = DB::table('account')->orderBy('id','Desc')
            ->join('role', 'account.role_id', 'role.id')
            ->join('users', 'account.id', 'users.account_id')
            ->select(
                'account.*',
                'role.id as roleid',
                'users.age as age',
                'users.sex as sex',
                'users.name as username',
                'users.phone as phone',
                'users.address as address',
                'users.email as email',
                'users.id as userid'
            )
            ->paginate(8);

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $account = DB::table('account')->orderBy('account.name', 'Asc')
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'name_za') {
                $account = DB::table('account')->orderBy('account.name', 'Desc')
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'address_az') {
                $account = DB::table('account')->orderBy('users.address', 'Asc')
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($sort_by == 'address_za') {
                $account = DB::table('account')->orderBy('users.address', 'Desc')
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            }
        }

        if (isset($_GET['choose'])) {
            $choose = $_GET['choose'];

            if ($choose == 'male') {
                $account = DB::table('account')->where('users.sex', 1)
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($choose == 'female') {
                $account = DB::table('account')->where('users.sex', 0)
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($choose == 'admin') {
                $account = DB::table('account')->where('role_id', 1)
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            } elseif ($choose == 'user') {
                $account = DB::table('account')->where('role_id', 2)
                    ->join('role', 'account.role_id', 'role.id')
                    ->join('users', 'account.id', 'users.account_id')
                    ->select(
                        'account.*',
                        'role.id as roleid',
                        'users.name as username',
                        'users.age as age',
                        'users.sex as sex',
                        'users.phone as phone',
                        'users.address as address',
                        'users.email as email',
                        'users.id as userid'
                    )
                    ->paginate(8)->appends(request()->query());
            }
        }
        return view('admin/MainPage/users', ['users' => $account])->with($data);
    }

    public function Contact()
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
            $contact = DB::table('account')->orderBy('contacts.id','Desc')
            ->join('contacts', 'account.id', '=', 'contacts.account_id')
            ->join('users', 'account.id', '=', 'users.account_id')
            ->select(
                'account.name as name',
                'users.name as username',
                'users.phone as phone',
                'users.email as email',
                'contacts.mess as message'
            )
            ->paginate(8);
        

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if ($sort_by == 'name_az') {
                $contact = DB::table('account')->orderBy('name', 'Asc')
                    ->join('contacts', 'account.id', '=', 'contacts.account_id')
                    ->join('users', 'account.id', '=', 'users.account_id')
                    ->select(
                        'account.*',
                        'users.phone as phone',
                        'users.email as email',
                        'contacts.mess as message'
                    )
                    ->paginate(5)->appends(request()->query());
            } elseif ($sort_by == 'name_za') {
                $contact = DB::table('account')->orderBy('name', 'Desc')
                    ->join('contacts', 'account.id', '=', 'contacts.account_id')
                    ->join('users', 'account.id', '=', 'users.account_id')
                    ->select(
                        'account.*',
                        'users.phone as phone',
                        'users.email as email',
                        'contacts.mess as message'
                    )
                    ->paginate(5)->appends(request()->query());
            }
        }
        return view('admin/MainPage/contact', ['contacts' => $contact])->with($data);
    }

    public function Delete_Product($id)
    {
        Order_product::where('product_id', '=', $id)->delete();
        Images_product::where('product_id', '=', $id)->delete();
        Products::find($id)->delete();
        return redirect('/admin/productlist');
    }

    public function Delete_Category($id)
    {
        $prod_ids = Products::where('categogy_id', $id)->get('id')->toArray();
        foreach ($prod_ids as $prod_id) {
            Order_product::where('product_id', $prod_id)->delete();
            Images_product::where('product_id', $prod_id)->delete();
        }
        Products::where('categogy_id', $id)->delete();
        Category::find($id)->delete();
        return redirect('/admin/category');
    }

    public function Search_Product(Request $request)
    {
        $product_name = $request->get('search_product');
        $data = [
            'products' => Products::join('category', 'products.categogy_id', '=', 'category.id')
            ->where('products.name', 'like','%'. $product_name . '%')->orwhere('category.name','like','%'.$product_name.'%')   
            ->select('products.*', 'category.name as category_name')
            ->paginate(5)->appends(request()->query()),
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
            
        ];
        return view('admin/MainPage/product')->with($data);
    }

    public function Search_Management(Request $request)
    {
        $product_name = $request->get('search_product');
        $data = [
            'products' => Products::join('category', 'products.categogy_id', '=', 'category.id')
            ->where('products.name', 'like','%'. $product_name . '%')->orwhere('category.name','like','%'.$product_name.'%')
            ->select('products.*', 'category.name as category_name')
            ->paginate(5)->appends(request()->query()),
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        return view('admin/MainPage/management')->with($data);
    }

    public function Search_Category(Request $request)
    {
        $Category_name = $request->get('search_category');
        $data = [
            'categorys' => Category::where('name', 'like', '%'. $Category_name . '%')->paginate(5)->appends(request()->query()),
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        return view('admin/MainPage/category')->with($data);
    }

    public function Search_Orders(Request $request)
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $Orders_name = $request->get('search_orders');
        $orders = Users::where('account.name', 'like', '%' . $Orders_name . '%')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->join('account', 'users.account_id', '=', 'account.id')
            ->select(
                'users.*',
                'orders.id as orderid',
                'orders.status as payment',
                'orders.delivered as delivered',
                'account.name as username',
                'users.address as address',
            )
            ->paginate(5)->appends(request()->query());
        return view('admin/MainPage/orders', ['orders' => $orders])->with($data);
    }

    public function Search_Users(Request $request)
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $Username = $request->get('search_users');
        $users = DB::table('account')->where('account.name', 'like','%'. $Username . '%')
            ->join('role', 'account.role_id', 'role.id')
            ->join('users', 'account.id', 'users.account_id')
            ->select(
                'account.*',
                'account.role_id',
                'role.id as roleid',
                'users.name as username',
                'users.age as age',
                'users.sex as sex',
                'users.phone as phone',
                'users.address as address',
                'users.email as email',
                'users.id as userid'
            )
            ->paginate(5)->appends(request()->query());
        return view('admin/MainPage/users', ['users' => $users])->with($data);
    }

    public function Search_Contact(Request $request)
    {
        $data = [
            'user' => DB::table('users')->where('account_id', session('account_id'))->first()
        ];
        $contactValue = $request->get('search_contact');
        $contact = DB::table('account')
            ->join('contacts', 'account.id', '=', 'contacts.account_id')
            ->join('users', 'account.id', '=', 'users.account_id')
            ->select(
                'account.*',
                'users.phone as phone',
                'users.email as email',
                'contacts.mess as message'
            )
            ->where('account.name', 'like','%'. $contactValue.'%' )->orWhere('users.email', 'like', '%'. $contactValue.'%' )
            ->paginate(5)->appends(request()->query());
        return view('admin/MainPage/contact', ['contacts' => $contact])->with($data);
    }
    public function logout(Request $request)
    {
        $request->session()->forget('role_id');
        $request->session()->forget('account_id');
        $request->session()->forget('username');

        return redirect('login/signin');
    }
}
