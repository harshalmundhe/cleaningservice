@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><b>Roles</b>
                @can('create role')
                <div class="float-end">
                    <a href="{{ route('admin.role.add') }}" class="btn btn-primary">Add New</a>
                </div>
                @endcan
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role) 
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection