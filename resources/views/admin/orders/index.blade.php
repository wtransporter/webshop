@extends('admin.layouts.app')

@section('content')
<section class="content">
<div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Order list</h3>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <p style="margin-top: 10px;" class="text-white text-xs mt-2 alert alert-danger">
                    {{ $error }}
                </p>
                @endforeach
            @endif
            @if (Session::has('message'))
                <p style="margin-top: 10px;" class="text-white text-xs mt-2 alert alert-success">
                    {{ Session::get('message') }}
                </p>
            @endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Order number</th>
              <th>Ordered By</th>
              <th>Order Date</th>
              <th>Status</th>
              <th>Subtotal</th>
              <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>OR{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ formatedDate($order->created_at) }}</td>
                        <td>
                            <small class="label label-{{ $order->status == 99 ? 'success' : 'danger' }}">
                                {{ $order->status == 99 ? 'Processed' : 'Pending' }}
                            </small>
                        </td>
                        <td>{{ formatedPrice($order->total_price) }}</td>
                        <td>
                          <a href="{{ route('order', $order->id) }}"><i class="fa fa-info"></i> Details</a>
                        </td>
                        <td>
                          <a href="{{ route('order.send', $order->id) }}"><i class="fa fa-upload"></i> Send</a>
                        </td>
                    </tr>        
                @endforeach
            </tbody>
          </table>
          {{ $orders->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection