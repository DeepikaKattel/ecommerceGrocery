@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Add Barcode Content</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('barcode.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($count < 1)
        <form action="{{route('barcode.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="banner1">Title</label>
                <input type="text"class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="image">Image:</label><br>
                <input type="file" name="image">
            </div>


            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
        @else
            <div class="card-body">
                <p> Sorry, you cannot add more content for this section.</p>
            </div>
        @endif
    </div>
@endsection

