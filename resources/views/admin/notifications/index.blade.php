@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Notifications
		<small>list of all notifications</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="/tp-admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Notifications</li>
	</ol>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Notifications</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table class="table table-bordered">
			<tbody>
				<tr>
					<th style="width: 10px">#</th>
					<th>Task</th>
					<th>Progress</th>
					<th style="width: 40px">Status</th>
				</tr>
			@forelse ($notifications as $notification)
				<tr>
					<td>{{ $loop->iteration }}.</td>
					<td>
						{!! $notification->data['message'] !!}
					</td>
					<td>
					<div class="progress progress-xs">
						<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
					</div>
					</td>
					<td>
						<toggle-status :data="{{ $notification }}"></toggle-status>
					</td>
				</tr>
			@empty
				<p class="text-red text-xs mt-2">There is no notifications !</p>
			@endforelse
			{{-- <tr>
				<td>1.</td>
				<td>Update software</td>
				<td>
				<div class="progress progress-xs">
					<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
				</div>
				</td>
				<td><span class="badge bg-red">55%</span></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Clean database</td>
				<td>
				<div class="progress progress-xs">
					<div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
				</div>
				</td>
				<td><span class="badge bg-yellow">70%</span></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Cron job running</td>
				<td>
				<div class="progress progress-xs progress-striped active">
					<div class="progress-bar progress-bar-primary" style="width: 30%"></div>
				</div>
				</td>
				<td><span class="badge bg-light-blue">30%</span></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Fix and squish bugs</td>
				<td>
				<div class="progress progress-xs progress-striped active">
					<div class="progress-bar progress-bar-success" style="width: 90%"></div>
				</div>
				</td>
				<td><span class="badge bg-green">90%</span></td>
			</tr> --}}
			</tbody>
			</table>
		</div>
		<!-- /.box-body -->
		<div class="box-footer clearfix">
			{{ $notifications->links() }}
		</div>
	</div>
</section>
@endsection