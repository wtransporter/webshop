@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Product Image -->
            <div class="col-sm-6">
                <div class="product-image-large">
                    <img src="{{ file_exists(public_path().$article->imageBasePath().'/700x400_'.$article->image1) ? $article->imageBasePath().'/700x400_'.$article->image1 : noImage() }}" alt="Item Name">
                </div>
            </div>
            <!-- End Product Image -->
            <!-- Product Summary & Options -->
            <div class="col-sm-6 product-details">
                <h4>{{ $article->title }}</h4>
                <div class="price">
                    <span class="price-was">$959.99</span> {{ webPrice($article->price) }}
                </div>
                <h5>Quick Overview</h5>
                <p>
                    Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
                </p>
                <table class="shop-item-selections">
                    <!-- Quantity -->
                    <form class="clear-form" action="/tp-admin/cart/{{ $article->id }}" method="GET">
                        @csrf
                        <tr>
                            <td><b>Quantity:</b></td>
                            <td>
                                <input id="amount" name="amount" type="text" class="form-control input-sm input-micro" value="1">
                            </td>
                        </tr>
                        <!-- Add to Cart Button -->
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <button type="submit" class="btn"><i class="icon-shopping-cart icon-white"></i> Add to Cart</button>
                            </td>
                        </tr>     
                    </form>
                </table>
            </div>
            <!-- End Product Summary & Options -->
            
            <!-- Full Description & Specification -->
            <div class="col-sm-12">
                <div class="tabbable">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs product-details-nav">
                        <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                        <li><a href="#tab2" data-toggle="tab">Specification</a></li>
                    </ul>
                    <!-- Tab Content (Full Description) -->
                    <div class="tab-content product-detail-info">
                        <div class="tab-pane active" id="tab1">
                            {!! $article->description !!}
                        </div>
                        <!-- Tab Content (Specification) -->
                        <div class="tab-pane" id="tab2">
                            <table>
                                <tr>
                                    <td>Total sensor Pixels (megapixels)</td>
                                    <td>Approx. 16.7</td>
                                </tr>
                                <tr>
                                    <td>Effective Pixels (megapixels)</td>
                                    <td>Approx. 16.1</td>
                                </tr>
                                <tr>
                                    <td>Automatic White Balance</td>
                                    <td>YES</td>
                                </tr>
                                <tr>
                                    <td>White balance: preset selection</td>
                                    <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                                </tr>
                                <tr>
                                    <td>White balance: custom setting</td>
                                    <td>YES</td>
                                </tr>
                                <tr>
                                    <td>White balance: types of color temperature</td>
                                    <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                                </tr>
                                <tr>
                                    <td>White balance bracketing</td>
                                    <td>NO</td>
                                </tr>
                                <tr>
                                    <td>ISO Sensitivity Setting</td>
                                    <td>ISO100 - 25600 equivalent</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Full Description & Specification -->
        </div>
    </div>
</div>
@endsection