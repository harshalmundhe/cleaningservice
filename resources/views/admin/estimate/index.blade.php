@extends('layout.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><b>Estimate</b>
                
            </div>
            <div class="card-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estimates as $estimate) 
                            <tr>
                                <td>{{ $estimate->id }}</td>
                                <td>{{ $estimate->name }}</td>
                                <td>{{ $estimate->email }}</td>
                                <td>{{ $estimate->phone }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info m-2" href="{{ route('admin.estimate.view', $estimate->id) }}"><i class='bi bi-eye'></i></a>
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