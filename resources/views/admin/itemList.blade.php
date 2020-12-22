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
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->availability}}</td>
                            <td>Rs. {{$item->rate}}</td>
                            <td>Rs. {{$item->prev_price}}</td>
                            <td>{{$item->sku}}</td>
                            <td>{{$item->tags}}</td>
                            <td>
                                <a href="{{route('item.edit',$item->id)}}"><i class="fa fa-lg fa-edit"></i></a>
                                @method('DELETE')
                                <a onclick="return confirm('Do you want to delete')" href="{{route('i.destroy',$item->id)}}"><i class="fa fa-lg fa-minus-circle" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
    </div>
@endsection
