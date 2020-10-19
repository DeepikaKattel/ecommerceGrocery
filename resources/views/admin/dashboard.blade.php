@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            </div>
        </div>
    </div>

    <section class=" pb-0">
        <div class="container">
          <div class="jumbotron text-center">
            <h1 class="font-weight-light">Hello Admin!</h1>
          </div>
        </div>
    </section>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h5 class="m-0">Quick Information</h5>
            </div>
            </div>
        </div>
    </div>
      
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{count($users)}}</h3>

                            <p>Total Users/Clients</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{count($products)}}</h3>

                            <p>Total products Items</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
