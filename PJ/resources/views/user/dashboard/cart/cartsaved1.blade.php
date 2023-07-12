@extends('user.layout.layout')
@section('content')
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="shopping__cart__table">


                        <table class="uupdate_cart-url" border-radius="1px" data-url={{ url('updatesavedcart') }}>
                            <thead style="height:10px; background-color: rgb(253, 255, 111)">
                                <tr style="height:10px">
                                    <th>Product</th>
                                    <th>Quantity </th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                    $id = 0;
                                @endphp
                                @if (isset($cart))
                                    @foreach ($cart as $item)
                                        <tr>

                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:100px;height:100px"
                                                        src=" {{ asset('user') }}/img/product/{{ $item['photo'] }}"
                                                        alt="">

                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6> {{ $item['name'] }}</h6>
                                                    <h5>$ {{ $item['price'] }}</h5><small>(quantity
                                                        {{ $item['quantity_kho'] }})</small>
                                                </div>



                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                        <input class="qunatityy" type="text"
                                                            value="{{ $item['quantity'] }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>$ {{ $item['price'] * $item['quantity'] }}</b></td>
                                            <td class="cart__closen">
                                                <a href="{{ url('removeordersave/' . $item['id']) }}">
                                                    <i class="fa fa-trash btn btn-danger"></i>
                                                </a>
                                                <a class="fa fa-upload btn btn-success saved_cart_update"
                                                    data-id="{{ $item['id'] }}" href="{{ url('updatesavedcart') }}">
                                                    {{-- <i  class="fa fa-upload btn btn-success" aria-hidden="true"></i> --}}
                                                </a>
                                            </td>
                                            @php
                                                $total += $item['price'] * $item['quantity'];
                                                $id++;
                                            @endphp
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>without products</td>
                                        <td></td>
                                    </tr>
                                @endif
                                <tr>
                                    <td></td>
                                    <td style="color:red"><b>{{ session('er') }}</b></td>
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
                                        echo "$ " . $total;
                                    @endphp
                                </span>
                            </li>
                        </ul>
                        <button id="noButton" style="border:1px"> <a href="{{ url('shop/paymentsavedcart') }}"
                                id="payment" class="primary-btn2" style="display:block">Payment</a></button>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
