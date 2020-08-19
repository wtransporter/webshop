@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Articles
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
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Articles</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Manufacturer</th>
                            <th>Description</th>
                            <th>Item code</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Tax</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td class="align-middle">{{ $article->id }}</td>
                            <td class="text-center" style="padding: 0px; width: 50px; height: 50px;">
                                <a href="#">
                                    <img  style="padding: 0px; width: 50px; height: 50px;" style="padding: 3px;"
                                        src="{{ file_exists(public_path().asset('/images/'). $article->image) ?
                                        asset('/images').'/'. $article->image :
                                        asset('/images'). '/no-image.png'  }}" alt="{{ $article->title }}">
                                </a>
                            </td>
                            <td class="align-middle">{{ $article->title }}</td>
                            <td class="align-middle">{{ $article->manufacturer }}</td>
                            <td class="align-middle">{{ $article->description }}</td>
                            <td class="align-middle">{{ $article->code }}</td>
                            <td class="align-middle text-right">{{ formatedPrice($article->price) }}</td>
                            <td class="align-middle text-right">{{ $article->amount }}</td>
                            <td class="align-middle text-center">
                                <input type="checkbox" 
                                {{ $article->active ? 'checked' : '' }}>
                            </td>
                            <td class="align-middle">{{ $article->tax }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

@endsection