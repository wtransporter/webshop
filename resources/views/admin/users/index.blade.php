@extends('admin.layouts.app')

@section('content')

<section class="content">
<div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Registered users</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Status</th>
              <th colspan="2">Registration date</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->active ? 'active' : 'inactive' }}</td>
                        <td>{{ formatedDate($user->created_at) }}</td>
                        <td>
                          <a href="{{ route('user', $user->id) }}"> Details</a>
                        </td>
                    </tr>        
                @endforeach
            </tbody>
          </table>
          {{ $users->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>

@endsection