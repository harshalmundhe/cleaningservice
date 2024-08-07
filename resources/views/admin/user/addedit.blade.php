@extends('layout.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
             {{ $id?"Edit":"Add" }} User
        </div>
        <div class="card-body">
            @include('admin.partials.flash')
            @if(!empty($id)) 
            <div class="alert alert-info">
                Enter password only if needs to be changed
            </div>
            @endif
            <form action="{{ $id?route('admin.user.edit'):route('admin.user.add') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->email ?? '' }}" @if(!empty($id)) readonly @endif>
                </div>
                <div class="form-group">
                    <label for="password">Passowrd</label>
                    <input type="text" class="form-control" name="password" value="">
                </div>
                <div class="form-group">
                    <label for="role">Roles</label>
                    <select name="role" id="role" class="form-control">
                        @foreach($roles as $role)
                        @if( !empty($user->roles[0]->name) && strtolower($user->roles[0]->name) == strtolower($role->name) )
                        <option value="{{ $role->name }}"  selected="selected" >{{ $role->name }}</option>
                        @else
                        <option value="{{ $role->name }}" >{{ $role->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <input type="submit" name="save" value="Save" class="mt-3 btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection