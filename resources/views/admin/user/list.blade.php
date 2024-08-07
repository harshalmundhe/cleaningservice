@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><b>Users</b>
                <div class="float-end">
                    <a href="{{ route('admin.user.addedit') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>User id</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user) 
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info m-2" href="{{ route('admin.user.addedit', $user->id) }}"><i class='bi bi-pen'></i></a>
                                        <a class="btn btn-danger m-2" href="{{ route('admin.user.delete', $user->id) }}" ><i class='bi bi-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection