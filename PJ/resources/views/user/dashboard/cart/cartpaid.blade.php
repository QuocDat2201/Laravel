@extends('user.layout.layout')
@section('content')
    <!-- Breadcrumb Section End -->

    <h3 align="center"><b>CART PAID</b></h3>
    <div class="section-divider"></div>
    <!-- Shopping Cart Section Begin -->
    <div style="font-family: Roboto">
        <section class="">
            <div class="container">
                <div class="row" style=" border: 1px solid #ccc;">
                    <div class="col-md-2"></div>
                    <div class="col-md-6"
                        style=" background-image: linear-gradient(rgb(255, 255, 255),rgb(255, 255, 255),rgb(255, 255, 255))">

                        <div class="">
                            <table class="update_cart-url" border-radius="3px" data-url={{ url('updatecart') }}>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>total</td>
                                    <td></td>

                                </tr>
                                <tbody>
                                    @php
                                        $total = 0;
                                        $id = 0;
                                    @endphp
                                    @if (isset($cart))
                                        @foreach ($cart as $item)
                                            <td class="product__cart__item">
                                                <div class="product__cart__item__pic">
                                                    <img style="width:60px;height:60px"
                                                        src=" {{ asset('user') }}/img/product/{{ $item['photo'] }}"
                                                        alt="">
                                                </div>
                                                <div class="product__cart__item__text">
                                                    <h6 style="font-size: 13px"> {{ $item['name'] }}</h6>
                                                    <h5 style="font-size: 13px">$ {{ $item['price'] }}</h5>

                                                </div>


                                            </td>
                                            <td width="100px"><b style="font-size: 17px"> X {{ $item['quantity'] }}</b>
                                            </td>

                                            <td><b>${{ $item['price'] * $item['quantity'] }}</b></td>

                                            {{-- <td class="cart__close">
                                                <a href="{{ url('removeorder/' . $item['id']) }}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="" class="cart_update" data-id="{{$id}}" >
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </a>
                                            </td> --}}

                                            @php
                                                $total += $item['price'] * $item['quantity'];
                                                $id++;
                                            @endphp
                                            </tr>
                                            <tr></tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>Chu co san pham duoc mua</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="container">
                            <h4 style="text-align:center;color:green">Cart total</h4>
                            <br>
                            <div style="text-align:center;"><span>
                                    @php
                                        echo " <b> $ " . $total . '</b>';
                                    @endphp
                                    @if (isset($cart))
                                </span> <button id="noButton" class="btn btn-success" style="border:1px"> Paid</button>
                            </div>
                            <br>
                            <div style="text-align:center;color:rgb(255, 81, 0)">Created at : {{ $created }}</div>
                        </div>
                    @else
                        @endif
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
    </div>
    </section>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class=" col-md-4">
            <div align="center" class="continue__btn">
                <a class="btn btn-dark" href="{{ url('shop') }}">Continue Shopping</a>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    </div>
@endsection
