@extends('layout.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
             Add Role
        </div>
        <div class="card-body">
            @include('admin.partials.flash')
            
            <form action="{{ route('admin.role.create') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="username">Permissions</label>
                    <br>
                    @foreach($permissions as $perm) 
                        <input type="checkbox" name="permission[]" value="{{ $perm->name }}">{{ $perm->name }} <br>
                    @endforeach
                    
                </div>

                <input type="submit" name="save" value="Save" class="mt-3 btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection