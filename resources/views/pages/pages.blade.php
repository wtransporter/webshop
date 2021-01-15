@extends('layouts.app')

@section('content')

<x-section-breadcrumb>
    {{ $page->title }}
</x-section-breadcrumb>

<div class="container">
    <div class="row justify-content-center">

        {!! ($page->content) !!}
        
    </div>
</div>

<x-google-map />
@endsection