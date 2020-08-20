@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Article Form
      <small>list of available articles</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border">
        @if(session('flash'))
            <p class="alert alert-success mt-2">{{ session('flash') }}</p>
        @endif
        <h3 class="box-title">New Article</h3>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <form action="/tp-admin/articles" method="post">
        @csrf
        <div class="box-body login-box-body">

                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control"  type="text" name="title" id="title" placeholder="Title ..." required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input class="form-control"  type="text" name="slug" id="slug" placeholder="Sulg ..." required>
                </div>
                <div class="form-group">
                    <label>Manufacturer</label>
                    <input class="form-control" type="text" name="manufacturer" id="manufacturer" placeholder="Manufacturer ..." required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description ..." required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Code</label>
                        <input class="form-control"  type="text" name="code" id="code" placeholder="123456789" required>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Price</label>
                        <input class="form-control"  type="text" name="price" id="price" placeholder="0,00" required>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Amount</label>
                        <input class="form-control"  type="text" name="amount" id="amount" placeholder="0,00" required>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Discount</label>
                        <input class="form-control"  type="text" name="discount" id="discount" placeholder="0,00" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id" id="categpry_id"  required>
                                <option value>--------</option>
                                <option value="1">
                                    Option 1
                                </option>
                                {{-- <option value="{{ $channel->id }}"
                                    {{ old('channel_id') == $channel->id ? 'selected' : '' }}>
                                    Option 1
                                </option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 form-group">
                        <label>Tax</label>
                        <input class="form-control"  type="text" name="tax" id="tax" placeholder="S1" required>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 form-group"  style="margin-top: 20px;">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active" id="active">
                                Active
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 form-group"  style="margin-top: 20px;">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sale" id="sale">
                                Sale
                            </label>
                        </div>
                    </div>
                </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</section>
    
@endsection