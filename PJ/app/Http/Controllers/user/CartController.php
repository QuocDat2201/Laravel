<?php

namespace  App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Order_product;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartController extends Controller
{



    public function index(Request $request)
    {
        // $request->session()->forget('error');
        $data = [
            'cart' => $request->session()->get('cart')
        ];
        // dd($data );
        // echo $data['cart'][0]['product']['name'];
        // dd(isset(session('error')));
        return view('user.pages.shoppingcart')->with($data);
    }
    public function layoutsavedcart()
    {
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->first();
        if ($order_id == null) {
            return view('user.dashboard.cart.cartsaved1');
        };
        $order_product = DB::table('order_product')->where('order_id', '=', $order_id->id)->value('id');
        if ($order_product == null) {

            $data = [
                'cart' => [],
            ];
            // dd($data['cart']);
            return view('user.dashboard.cart.cartsaved1')->with($data);
        } else {

            $order_product = DB::table('order_product')->where('order_id', '=', $order_id->id)->get();
            $product = [[]];
            $id = 0;
            // dd( $order_product);
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
                    'quantity_kho'=> DB::table('products')->where('id', '=', $item->product_id)->value('quantity'),
                    'photo' => DB::table('products')->where('id', '=', $item->product_id)->value('photo'),
                ];
                $id++;
            };
            $data = [
                'cart' => $product,
            ];
            // dd($data['cart']);
            return view('user.dashboard.cart.cartsaved1')->with($data);
        }
    }
    public function savecart(Request $request)
    {
        if (!session('cart')) {
            return redirect()->back()->with('error', 'WITHorderajasf');
        }
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $currentDate = Carbon::now()->toDateString();

        // $data = [
        //     'user_id' => $user_id,
        //     'status' => 0,
        //     'created_at' => $currentDate,
        // ];
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->take(1)->value('id');
        // Orders::create($data);
        $cart = $request->session()->get('cart');

        foreach ($cart as $item) {
            $id_order_product = Order_product::where('product_id', '=', $item['product']->id)->where('order_id', '=', $order_id)->value('id');
            // dd($id_order_product );
            if ($id_order_product != null) {
                $data = [
                    'quantity_product_order' => $item['quantity'],
                ];
                Order_product::find($id_order_product)->update($data);
                $request->session()->forget('cart');
            } else {
                $data = [
                    'order_id' => $order_id,
                    'product_id' => $item['product']->id,
                    'quantity_product_order' => $item['quantity'],
                ];
                Order_product::create($data);
                $request->session()->forget('cart');
            };
        };
        // $data = [
        //     // 'cart' => $request->session()->get('cart')
        // ];
        return redirect('pages/shoppingcart');
    }
    public function layoutpaidcart()
    {
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 1)->orderBy('id', 'desc')->first();
        // dd($order_product);
        if ($order_id == null) {

            return view('user.dashboard.cart.cartpaid');
        } else {
            $order_id = $order_id->id;
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
            $data = [
                'cart' => $product,
                'created' => DB::table('orders')->orderBy('id', 'desc')->where('user_id', $user_id)->where('status', 1)->value('update_at'),
            ];
            // dd($data)
            //    dd($data['cart']);
            return view('user.dashboard.cart.cartpaid')->with($data);
        }
    }
    public function addorder(Request $request)
    {
        if (!$request->session()->has('account_id')) {
            return redirect('pages/shoppingcart');
        };
        if (!$request->session()->has('cart')) {
            $cart = array();
            $quantity_kho=Products::find($request->id);
            $quantity_kho=$quantity_kho->quantity;
            array_push($cart, [
                'product' => Products::find($request->id),
                'quantity' => 1,
                'quantity_kho'=>$quantity_kho,
            ]);
            $request->session()->put('cart', $cart);
        } else {
            $cart = $request->session()->get('cart');
            $index = $this->exists($request->id, $cart);
            if ($index == -1) {
                $quantity_kho=Products::find($request->id);
            $quantity_kho=$quantity_kho->quantity;
                array_push($cart, [
                    'product' => Products::find($request->id),
                    'quantity' => 1,
                    'quantity_kho'=>$quantity_kho,
                'id'=>$request->id

                ]);
            } else {
                $cart[$index]['quantity']++;
            }
            $request->session()->put('cart', $cart);
        }
        return response()->json(['code' => 200], status: 200);
    }
    public function remove($id, Request $request)
    {
        $cart = $request->session()->get('cart');
        $index = $this->exists($id, $cart);
        unset($cart[$index]);
        $request->session()->put('cart', array_values($cart));
        return redirect('pages/shoppingcart');
    }
    public function removesave($id, Request $request)
    {

        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->first();
        $id_order_products = DB::table('order_product')->where('order_id', $order_id->id)->where('product_id', $request->id)->value('id');
        Order_product::find($id_order_products)->delete();
        return redirect('shop/paidcart');
    }

    public function buy($id, Request $request)
    {
        $data = [
            'product' => Products::find($id),
        ];
        return view('user/dashboard/test')->with($data);
    }
    public function updatecart(Request $request)
    {
        $cart = $request->session()->get('cart');

        $cart[$request->id]['quantity'] = $request->quantity;
        $request->session()->put('cart', $cart);
        $data = [
            'cart' => $request->session()->get('cart')
        ];
        $cartcpn = view('user.pages.shoppingcart')->with($data)->render();
        return response()->json(['cart_component' => $cartcpn, 'code' => 200], status: 200);
    }
    public function updatecartssaved(Request $request)
    {
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->first();
        $order_product = Order_product::where('order_id', $order_id->id)->get();
        $idupdate = Order_product::where('order_id', $order_id->id)->where('product_id', $request->id)->value('id');
        $data = [
            'quantity_product_order' => $request->quantity,
        ];
        Order_product::find($idupdate)->update($data);
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
        $data = [
            'cart' => $product,
        ];
        $cartcpn = view('user.cart.cartsaved1')->with($data)->render();
        return response()->json(['cart_component' => $cartcpn, 'code' => 200], status: 200);
        // $data = [
        //     'cart' => $product,
        // ];
        // // dd($data);
        // $cartcpn = view('user.dashboard.cart.cartsaved1')->with($data)->render();

        // return response()->json(['cart_component' => $cartcpn, 'code' => 200], status: 200);
    }
    public function updatesavedcart(Request $request)
    {
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->first();
        $data = [
            'quantity_product_order' => $request->quantity,
        ];
        $id_order_products = DB::table('order_product')->where('order_id', $order_id->id)->where('product_id', $request->id);
        $id_order_products=$id_order_products->value('id');
        // dd($data);
        Order_product::find($id_order_products)->update($data);
        $order_id = $order_id->id;
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
        $data = [
            'cart' => $product,
        ];
        // dd($data);
        $cartcpn = view('user.dashboard.cart.cartsaved1')->with($data)->render();
        return response()->json(['cart_component' => $cartcpn, 'code' => 200], status: 200);
    }
    public function paymentsavedcart(Request $request)
    {
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->orderBy('id', 'desc')->first();
        $order_product = Order_product::where('order_id', $order_id->id)->get();
        $currentDate = Carbon::now()->toDateString();
        $product = [[]];
        $id = 0;
        foreach ($order_product as $item) {
            $id_order_product = Order_product::where('product_id', '=', $item['product']->id)->where('order_id', '=', $order_id)->value('id');

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
            $quantity_product = Products::find($item['product']->id)->value('quantity');
            $data1 = [
                'quantity' => $quantity_product - $item['quantity'],
            ];
            Products::find($id_order_product)->update($data1);
            $id++;
        };

        //_______
       

        // $data = [
        //     'user_id' => $user_id,
        //     'status' => 0,
        //     'created_at' => $currentDate,
        // ];
        // Orders::create($data);
        // $request->session()->forget('cart');
        $data = [
            'status' => 1,
            'update_at' => $currentDate,
        ];
        Orders::find($order_id)->update($data);
        return redirect('pages/shoppingcart');
    }
    public function payment(Request $request)
    {
        $cart = $request->session()->get('cart');
        if ($cart == null) {
            $request->session()->put('er', '<===');
            return redirect('pages/shoppingcart');
        }
        foreach ($cart as $item) {
            // dd($cart);
            $quantity_product = Products::find($item['product']->id);
            $quantity_product= $quantity_product->quantity;
            // dd($quantity_product);
                
            if(($item['quantity'])>$quantity_product ){
                
                return redirect()->back()->with('error', 'ERRORR Quantyti');
            }
        }
        $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order = [
            'user_id' => $user_id,
            'status' => 0,
        ];

        Orders::create($order);

        // $user_id = DB::table('users')->where('account_id', '=', session('account_id'))->value('id');
        $order_id = DB::table('orders')->where('user_id', '=', $user_id)->where('status', '=', 0)->value('id');
        $currentDate = Carbon::now()->toDateString();
        
        foreach ($cart as $item) {
            $id_order_product = Order_product::where('product_id', '=', $item['product']->id)->where('order_id', '=', $order_id)->value('id');
            $data = [
                'order_id' => $order_id,
                'product_id' => $item['product']->id,
                'quantity_product_order' => $item['quantity'],
            ];
            Order_product::create($data);
            $quantity_product = Products::find($item['product']->id);
            $quantity_product=$quantity_product->quantity;
            $data = [
                'quantity' => $quantity_product - $item['quantity'],
            ];
            // dd( $data );
            Products::find($item['product']->id)->update($data);
        }
        $data = [
            'status' => 1,
            'update_at' => $currentDate,
        ];
            // dd( $order_id);
        Orders::find($order_id)->update($data);

        // $data = [
        //     'user_id' => $user_id,
        //     'status' => 0,
        //     'created_at' => $currentDate,
        // ];
        // Orders::create($data);
        $request->session()->forget('cart');
        return redirect('pages/shoppingcart');
    }
    private function exists($id, $cart)
    {
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['product']->id == $id) {
                return $i;
            }
        }
        return -1;
    }
}
