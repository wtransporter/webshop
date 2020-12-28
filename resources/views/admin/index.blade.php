@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{ $newOrders }}</h3>
  
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ $registeredUsers }}</h3>
  
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $uniqueVisitors }}</h3>
  
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<!-- TABLE: LATEST ORDERS -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Latest Orders</h3>

						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
						<table class="table no-margin">
							<thead>
							<tr>
							<th>Order ID</th>
							<th>Ordered By</th>
							<th>Date Of Order</th>
							<th>Status</th>
							<th>Popularity</th>
							</tr>
							</thead>
							<tbody>
								@foreach($orders as $order)
									<tr>
									<td><a href="/tp-admin/orders/{{ $order->id }}">OR{{ lPad($order->id) }}</a></td>
									<td>{{ $order->user->name }}</td>
									<td>
										{{ formatedDate($order->created_at) }}
									</td>
									<td>
										<span class="label label-{{ $order->status == 1 ? 'success' : 'warning' }}">
										{{ $order->status == 1 ? 'Shipped' : 'Pending' }}
										</span>
									</td>
									<td>
										<div class="sparkbar" data-color="#00a65a" sparkType="bar" data-height="20">90,80,90,-70,61,-83,63</div>
									</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
						<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
					</div>
				<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<div class="col-sm-12 col-md-4">
				<!-- PRODUCT LIST -->
				<div class="box box-primary">
					<div class="box-header with-border">
					<h3 class="box-title">Recently Added Products</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					<ul class="products-list product-list-in-box">
						@foreach ($articles as $article)
						<li class="item">
								<div class="product-img">
									<img src="{{ asset('dist/img/default-50x50.gif') }}" alt="Product Image">
								</div>
								<div class="product-info">
									<a href="javascript:void(0)" class="product-title">{{ $article->title }}
									<span class="label label-info pull-right">${{ formatedPrice($article->price) }}</span></a>
									<span class="product-description">
										{{ $article->description }}
									</span>
								</div>
							</li>
							<!-- /.item -->
						@endforeach
					</ul>
					</div>
					<!-- /.box-body -->
					<div class="box-footer text-center">
					{{-- <a href="javascript:void(0)" class="uppercase">View All Products</a> --}}
					<a href="/tp-admin/articles" class="uppercase">View All Products</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>	
		</div>
    </section>
    
@endsection