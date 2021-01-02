@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <!-- Action Buttons -->
                <div class="pull-left"> 
                    <p style="font-weight: bold; "><a class="btn btn-primary btn-xs" href="http://webshop.skynetweb.in.rs/cart/history/5"><i class="fa fa-arrow-left" aria-hidden="true"></i> Nazad</a></p>
                    <div class="panel panel-primary">
                        <div class="panel-heading">					            
                            Stavke narudzbine: {{ date("y") .'-OR'.lPad($order->id) }}
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                Broj narudzbine: {{ date("y") .'-OR'. lPad($order->id) }} <br>
                                Datum kreiranja: {{ formatedDate($order->created_at) }}  <br>
                                Za uplatu: {{ formatedPrice($order->total_price) }} <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Shopping Cart Items -->
                <table class="shopping-cart">
                    <tbody>
                        <tr style="font-weight: bold;">
                            <td colspan="2">Artikal</td>
                            <td>Količina</td>
                            <td>Cena</td>
                        </tr>

                        @foreach ($order->articles as $item)
                            <tr>
                                <!--Item Image -->
                                <td class="image" style="width: 60px;"><a href="http://webshop.skynetweb.in.rs/articles/4"><img style="width: 50px;" src="http://webshop.skynetweb.in.rs/images/proizvodi/4/700x400_11.jpg" alt="Armani Code for Men"></a></td>
                                <td>
                                    <div class="cart-item-title"><a href="http://webshop.skynetweb.in.rs/articles/4">{{ $item->title }}</a></div>
                                    <div class="feature">
                                        Popust: <span>10.00 %</span>
                                    </div>
                                </td>
                                <!--Item Quantity -->
                                <td class="quantity">
                                    <div>{{ $item->pivot->amount }}</div>
                                </td>
                                <!--Item Price -->
                                <td>{{ formatedPrice($item->pivot->price) }} RSD</td>
                            </tr>
                        @endforeach
                        <!-- End  Item -->
                    </tbody>
                </table>
                <!-- End  Items -->
            </div>
        </div>
    </div>
    </div>
</div>
    
@endsection