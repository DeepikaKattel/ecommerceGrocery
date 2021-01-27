@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Items list </h3>
                @else
                    <h3 class="m-0 text-dark pl-2">Items list for {{Auth::user()->vendor->name}}</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="pull-left">
            <form action="/itemSort" method="get" style="margin-left: 250px;">
                <div class="input-group">
                    <select class="form-control" id="sort" name="sort" >
                        <option value="id" selected="selected">Sort By Category</option>
                        @foreach ($catList as $name => $id)
                            <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Sort</button>
                  </span>
                </div>
            </form>
        </div>

        <div class="pull-right">
            <form action="/itemSearch" method="get" style="margin-left: 30px;width: 280px">
                <div class="input-group" >
                    <input type="search" class="form-control" id="searchProduct" name="search" placeholder="----Search Item----">
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </span>
                </div>
            </form>
        </div>
    </div>

    <br>

{{--    <div class="col-sm-6 ml-3 mb-2">--}}
{{--        <a href="/admin/userlist" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>--}}
{{--    </div>--}}

    <div class="col-md-10 offset-md-1 col-sm-12">
        @if($items)
            <table class="table table-bordered table-hover">
                @php
                    $c=0;
                @endphp
                <tr class="text-center">
                    <th>Sn</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                     <th>Availability</th>
                    <th>Rate</th>
                    <th>Previous Price</th>
                    <th>SKU</th>
                    <th>Tags</th>
                    <th>Action</th>
                </tr>
                    @foreach ($items as $item)
                        <tr  class="text-center">
                            @php
                                $c++;
                            @endphp
                            <td>{{$c}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->brand}}</td>
                            <td>{{$item->discount}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->availability}}</td>
                            <td>Rs. {{$item->rate}}</td>
                            <td>Rs. {{$item->prev_price}}</td>
                            <td>{{$item->sku}}</td>
                            <td>{{$item->id}}</td>
                            <td>
                                <a href="{{route('item.edit',$item->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                                @method('DELETE')
                                <a onclick="return confirm('Do you want to delete')" href="{{route('i.destroy',$item->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
            {!!$items->links()!!}
    </div>
@endsection
