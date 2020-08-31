@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('includes.message')
                <!-- Action Buttons -->
                {{-- <div class="pull-right">
                    <a href="#" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> UPDATE</a>
                    <a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT</a>
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Shopping Cart Items -->
                <table class="shopping-cart">
                    <!-- Shopping Cart Item -->
                    
                    @forelse ($articles  as $article)
                        <tr>
                            <!-- Shopping Cart Item Image -->
                            <td class="image">
                                <a href="page-product-details.html">
                                    <img src="{{ $article['items']->imagePath()}}" alt="Item Name">
                                </a>
                            </td>
                            <!-- Shopping Cart Item Description & Features -->
                            <td>
                                <div class="cart-item-title">
                                    <a href="page-product-details.html">{{ $article['items']->title }}</a>
                                </div>
                                <div class="feature color">
                                    Color: <span class="color-white"></span>
                                </div>
                                <div class="feature">Size: <b>XXL</b></div>
                            </td>
                            <!-- Shopping Cart Item Quantity -->
                            <td class="quantity">
                                <input class="form-control input-sm input-micro" type="text" value="{{ $article['amount'] }}">
                            </td>
                            <!-- Shopping Cart Item Price -->
                            <td class="price">${{ formatedPrice($article['price']) }}</td>
                            <!-- Shopping Cart Item Actions -->
                            <td class="actions">
                                <a href="#" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-pencil"></i></a>
                                <form class="clear-form" action="/tp-admin/cart/{{ $article['items']->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <!-- End Shopping Cart Item -->                        
                    @empty
                        <p class="alert alert-warning mt-3">You have no items in your cart !</p>
                    @endforelse
                </table>
                <!-- End Shopping Cart Items -->
            </div>
        </div>
        @if(Session::has('cart'))
        <div class="row">
            <!-- Promotion Code -->
            <div class="col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6">
                <div class="cart-promo-code">
                    <h6><i class="glyphicon glyphicon-gift"></i> Have a promotion code?</h6>
                    <div class="input-group">
                        <input class="form-control input-sm" id="appendedInputButton" type="text" value="">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-grey" type="button">Apply</button>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Shipment Options -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                <div class="cart-shippment-options">
                    <h6><i class="glyphicon glyphicon-plane"></i> Shippment options</h6>
                    <div class="input-append">
                        <select class="form-control input-sm">
                            <option value="1">Standard - FREE</option>
                            <option value="2">Next day delivery - $10.00</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Shopping Cart Totals -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
                <table class="cart-totals">
                    <tr>
                        <td><b>Transport i dostava</b></td>
                        <td>0,00 RSD</td>
                    </tr>
                    <tr>
                        <td><b>PDV</b></td>
                        <td>{{isset($totalPrice) ? formatedPrice($totalPrice-($totalPrice/1.2)) : 0}} RSD</td>
                    </tr>
                    <tr>
                        <td><b>Discount</b></td>
                        <td>0,00 RSD</td>
                    </tr>
                    <tr class="cart-grand-total">
                        <td><b>Ukupno</b></td>
                        <td><b>$ {{ isset($totalPrice) ? formatedPrice($totalPrice) : 0 }} RSD</b></td>
                    </tr>
                </table>
                <!-- Action Buttons -->
                <div class="pull-right">
                    <a href="#" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> UPDATE</a>
                    <form class="clear-form" action="/tp-admin/cart" method="POST">
                        @csrf
                        <button class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>  
</div>
@endsection