@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">    
        <div class="col-sm-12 col-md-12">
            @forelse($category->articles as $article)
                <x-product :article="$article" />
            @empty
                <x-alert type="danger">
                    No articles in this category
                </x-alert>
            @endforelse
        </div>
    </div>
</div>
@endsection