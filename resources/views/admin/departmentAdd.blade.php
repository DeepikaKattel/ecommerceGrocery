@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Adding Department</h3>
                @else
                <h3 class="m-0 text-dark pl-2">Adding Department for {{Auth::user()->name}}</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/admin/itemlist" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($count < 15)
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Department Name:</label>
                <input type="text" class="form-control" name="department_name">
            </div>

            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
        @else
            <div class="card-body">
                <p> Sorry, you cannot add more categories.</p>
            </div>
        @endif
    </div>
@endsection

