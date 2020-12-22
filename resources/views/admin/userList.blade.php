@extends('layouts.adminLayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2">User List</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-10 offset-md-1">
        Total Users:- {{count($users)}}
        <table class="table table-bordered table-hover">
                <tr  class="text-center">
                    <th>User ID</th>
                    <th>Client name</th>
                    <th>E-mail Address</th>
                    <th>Joined on</th>
                    <th>Actions</th>
                </tr>
            @foreach ($users as $user)
                <tr  class="text-center">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                {{-- <td class=" text-center"> <a href="" class="btn btn-outline-info btn-sm"><i class="fa fa-eye pr-1" aria-hidden="true"></i> View</a></td>  --}}
                <td>
                    <form action="/admin/user/remove/{{$user->id}}" method="POST" class="text-center" onsubmit="test(event)">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-outline-danger btn-sm" value="Remove"><i class="fa fa-trash pr-1" aria-hidden="true"></i> Remove</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
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
    </script>
@endsection
