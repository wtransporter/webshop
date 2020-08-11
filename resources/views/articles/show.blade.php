@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <!-- Product Image & Available Colors -->
            <div class="col-sm-6">
                <div class="product-image-large">
                    <img src="{{ file_exists(public_path().$article->imageBasePath().'/700x400_'.$article->image1) ? $article->imageBasePath().'/700x400_'.$article->image1 : noImage() }}" alt="Item Name">
                </div>
                <div class="colors">
                    <span class="color-white"></span>
                    <span class="color-black"></span>
                    <span class="color-blue"></span>
                    <span class="color-orange"></span>
                    <span class="color-green"></span>
                </div>
            </div>
            <!-- End Product Image & Available Colors -->
            <!-- Product Summary & Options -->
            <div class="col-sm-6 product-details">
                <h4>{{ $article->title }}</h4>
                <div class="price">
                    <span class="price-was">$959.99</span> ${{ $article->price }}
                </div>
                <h5>Quick Overview</h5>
                <p>
                    Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
                </p>
                <table class="shop-item-selections">
                    <!-- Color Selector -->
                    <tr>
                        <td><b>Color:</b></td>
                        <td>
                            <div class="dropdown choose-item-color">
                                <a class="btn btn-sm btn-grey" data-toggle="dropdown" href="#"><span class="color-orange"></span> Orange <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="menuitem"><a href="#"><span class="color-white"></span> White</a></li>
                                    <li role="menuitem"><a href="#"><span class="color-black"></span> Black</a></li>
                                    <li role="menuitem"><a href="#"><span class="color-blue"></span> Blue</a></li>
                                    <li role="menuitem"><a href="#"><span class="color-orange"></span> Orange</a></li>
                                    <li role="menuitem"><a href="#"><span class="color-green"></span> Green</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- Size Selector -->
                    <tr>
                        <td><b>Size:</b></td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-sm btn-grey" data-toggle="dropdown" href="#">XXL <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="menuitem"><a href="#">XS</a></li>
                                    <li role="menuitem"><a href="#">S</a></li>
                                    <li role="menuitem"><a href="#">M</a></li>
                                    <li role="menuitem"><a href="#">L</a></li>
                                    <li role="menuitem"><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- Quantity -->
                    <tr>
                        <td><b>Quantity:</b></td>
                        <td>
                            <input type="text" class="form-control input-sm input-micro" value="1">
                        </td>
                    </tr>
                    <!-- Add to Cart Button -->
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <a href="#" class="btn btn"><i class="icon-shopping-cart icon-white"></i> Add to Cart</a>
                        </td>
                    </tr>
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