@php
    if (! session()->has('type')) {
        $type = 'success';
    } else {
        $type = session('type');
    }
@endphp

@if(session('message'))
    <p class="alert alert-{{$type}}">{{ session('message') }}</p>
@endif