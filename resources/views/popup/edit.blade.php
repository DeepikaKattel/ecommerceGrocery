@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Edit popup content</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('popup.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        <form action="{{route('popup.update',$popup->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="banner1">Title</label>
                <input type="text" name="title" value="{{old('title', $popup->title)}}">
            </div>
            <div class="form-group">
                <label for="discount1">Discount 1</label>
                <input type="text" class="form-control" name="discount1" value="{{old('discount1', $popup->discount1)}}">
            </div>
            <div class="form-group">
                <label for="banner">Banner</label>
                <input type="file" name="banner" value="{{old('banner', $popup->banner)}}">
            </div>


            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
    </div>
@endsection

