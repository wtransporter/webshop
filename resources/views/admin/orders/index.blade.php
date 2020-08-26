@extends('admin.layouts.app')

@section('content')
<section class="content">
<div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Order list</h3>
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
            </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>OR{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ formatedDate($order->created_at) }}</td>
                        <td>{{ $order->status == 1 ? 'Delivered' : 'Pending' }}</td>
                        <td>{{ formatedPrice($order->total_price) }}</td>
                    </tr>        
                @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection