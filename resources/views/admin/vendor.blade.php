@extends('layouts.adminLayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2">Vendor</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="offset-md-1">
        <h3 class="m-0 text-dark pl-2">Add Vendor</h3>
        <form class="form-inline" action="" method="POST">
            @csrf
            <input type="text" class="form-control mb-2 mr-sm-2" name="name" placeholder="Vendor Name">
            <button type="submit" class="btn btn-primary mb-2">Add Vendor</button>
        </form>
    </div>

    <div class="col-md-10 offset-md-1 mt-5">
        <h3 class="m-0 text-dark pl-2">Vendor List</h3>
        <table class="table table-bordered table-hover">
                <tr  class="text-center">
                    <th>S.N</th>
                    <th>Vendor Name</th>
                    <th {{-- colspan="2"--}}>Actions</th>
                </tr>
            @foreach ($vendors as $vendor)
                <tr class="text-center">
                <td>{{$vendor->id}}</td>
                <td>{{$vendor->name}}</td>
                {{-- <td class=" text-center"> <a href="" class="btn btn-outline-info btn-sm"><i class="fa fa-eye pr-1" aria-hidden="true"></i> View</a></td>  --}}
                <td>
                    <form action="/admin/vendor/remove/{{$vendor->id}}" method="POST" class="text-center" onsubmit="test(event)">
                        @csrf

                        <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-outline-danger btn-sm" value="Remove"><i class="fa fa-trash pr-1" aria-hidden="true"></i> Remove</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </table>
    </div>

    {{-- <script>
        function test(e)
        {
            if(confirm("Are you sure you want to remove the User? Removing user will delete all records related to the user!"))
            {
                return true;
            }
            else{
                e.preventDefault();
            }
        }
    </script> --}}
@endsection
