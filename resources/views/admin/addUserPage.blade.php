@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2">Create Vendor Account</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/admin/userlist" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        <form action="/admin/user/add" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">User Name:</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="brand">Email:</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Password:</label>
                <input type="password" class="form-control" name="password">
                @error('password')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity">Confirm Password:</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>

            <div class="form-group">
                <label for="dept_id">Vendors:</label>
                <select class="form-control" name="vendor_id">
                    @foreach ($vendors as $vendor)
                        <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                    @endforeach
                </select>
            </div>

            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
    </div>
@endsection