@extends('user.layout.layout')
@section('content')
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad" >
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"><div id="notification"></div></div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="shopping__cart__table">
                              

                        <table class="update_cart-url" border-radius="3px" data-url={{ url('updatecart') }}>
                            <thead style="background-color: rgb(254, 245, 5)">
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity  </th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                    $id=0;
                                @endphp
                                @if (isset($cart))
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:100px;height:100px"
                                                        src=" {{ asset('user') }}/img/product/{{ $item['product']->photo }}"
                                                        alt="">
                                                    
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6> {{ $item['product']->name }}</h6>
                                                    <h5>$ {{ $item['product']->price }}</h5><small>(quantity {{$item['quantity_kho']  }})</small>
                                                </div>
                                                
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input class="qunatity" type="text"
                                                            value="{{ $item['quantity'] }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>$ {{ $item['product']->price * $item['quantity'] }}</b></td>
                                            <td class="">
                                                <a href="{{ url('removeorder/' . $item['product']->id) }}">
                                                    <i class="btn btn-danger fa fa-trash"></i>
                                                </a>
                                                <a href="" class="cart_update" data-id="{{$id}}" >
                                                    <i class="btn btn-success fa fa-upload" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            @php
                                                $total += $item['product']->price * $item['quantity'];
                                                $id++;
                                            @endphp
                                        </tr>
                                        
                                    @endforeach
                                @else
                                    <tr>
                                        <td>Chu co san pham duoc them vao gio</td>
                                    </tr>
                                @endif
                                    <tr>
                                        <td></td>
                                    <td style="color:red"><b>{{ session('er') }}</b></td>
                                    <td></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div align="center" class="continue__btn">
                                <a class="btn btn-warning" href="{{ url('shop') }}">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total 
                                 <span>
                                    @php
                                        echo "$ ".$total;
                                    @endphp
                                </span>
                            </li>
                        </ul>
                       <div> <button id="noButton" style="border:1px;display:block;width:300px;height:50px;background-color:red"  > <a href="{{ url('shop/payment') }}"  id="payment" style="color:aliceblue;font-size:30px " >Payment</a></button></div>
                      
                       <br> <div class="continue__btn update__btn">
                        <a href="{{ url('shop/savecart') }}" style="border:1px;display:block;width:300px;height:50px;text-align:center"  ><i class="fa fa-spinner"></i> Save cart</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
