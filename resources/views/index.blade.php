@extends('layouts.app')


@section('content')


@include ('includes.slider')
                    
@include ('includes.breadcrumb', ['title' => 'Najnoviji proizvodi'])


@include ('includes.product_slider', ['articles' => $featured])

@include ('includes.breadcrumb', ['title' => 'Aktuelni proizvodi'])

<div class="section">
    <div class="container">    

        @include ('includes.product', ['articles' => $articles])

    </div>
</div>

@include ('includes.action')

@include ('includes.map')

@endsection

