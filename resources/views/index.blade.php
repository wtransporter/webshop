@extends('layouts.app')


@section('content')


@include ('includes.slider')
                    
@include ('includes.breadcrumb', ['title' => 'Najnoviji proizvodi'])


<x-product-slider :articles="$featured" />
{{-- @include ('includes.product_slider', ['articles' => $featured]) --}}

@include ('includes.breadcrumb', ['title' => 'Aktuelni proizvodi'])

<div class="section">
    <div class="container">    

        <div class="col-sm-12 col-md-12">
            @foreach($articles as $article)

                <x-product :article="$article" />

            @endforeach
        </div>

        <div class="pagination-wrapper ">
            {{ $articles->links() }}
        </div>
        
        {{-- @include ('includes.product', ['articles' => $articles]) --}}

    </div>
</div>

@include ('includes.action')

@include ('includes.map')

@endsection

