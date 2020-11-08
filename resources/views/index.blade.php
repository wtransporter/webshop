@extends('layouts.app')


@section('content')


@include ('includes.slider')
                    
<x-section-breadcrumb>
    Najnoviji proizvodi
</x-section-breadcrumb>

<x-product-slider :articles="$featured" />

<x-section-breadcrumb>
    Aktuelni proizvodi
</x-section-breadcrumb>


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

    </div>
</div>

@include ('includes.action')

<x-google-map />

@endsection

