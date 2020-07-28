@extends('layouts.app')


@section('content')


@include ('includes.slider')

@include ('includes.press')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WELCOME</div>

                <div class="card-body">
                    INDEX PAGE
                </div>
            </div>
        </div>
    </div>
</div>

@include ('includes.services')

@include ('includes.action')

@include ('includes.testimonials')

@endsection

