@extends('admin.layouts.app')

@section('content')

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Imports
			<small>import webservice data</small>
		</h1>
		<br>
			<a href="{{ route('import') }}" class="btn btn-primary btn-sm">Import</a>
		<ol class="breadcrumb">
			<li><a href="/tp-admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Articles</li>
		</ol>
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<p style="margin-top: 5px;" class="text-white text-xs mt-2 alert alert-danger">
					{{ $error }}
				</p>
			@endforeach
		@endif
		<!-- Default box -->
		<div class="box box-primary" style="margin-top: 10px;">
			@if ($articles)
			<div class="box-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							{{-- <th>Title</th>
							<th>Manufacturer</th>
							<th>Description</th>
							<th>Item code</th>
							<th>Price</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Tax</th>
							<th>Action</th> --}}
						</tr>
					</thead>
					<tbody>
					@foreach ($articles as $article)
						<tr>
							<td class="align-middle">{{ lpad($article->ID, 6) }}</td>
							<td class="align-middle">{{ $article->Name }}</td>
							<td class="align-middle">{{ $article->Barcode }}</td>
							{{-- <td class="align-middle text-center" style="padding: 0px; width: 50px; height: 50px;">
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
							<td class="align-middle text-center">
								<div class="input-group">
									<a class="btn btn-primary btn-xs" href="/tp-admin/articles/{{ $article->slug }}/edit"><i class="fa fa-edit"></i></a>
									<form style="display: inline-block; padding: 0px;" action="/tp-admin/articles/{{ $article->slug }}" method="POST">
										@csrf
										@method('DELETE')
										<button style="margin-left: 5px;" class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
									</form>
								</div>
							</td> --}}
						</tr>
					@endforeach
					</tbody>
	
				</table>
			</div>
			@endif
		</div>
	</section>

@endsection