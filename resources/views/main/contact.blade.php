@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div id="top-mega-nav">
            <div class="container">
                <nav>
                    <ul class="inline">
                        <li class="dropdown le-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i> shop by department
                            </a>
                            <ul class="dropdown-menu" id="departmentList">

                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item current gray">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>
    <!-- ========================================= MAIN ========================================= -->
    <main id="contact-us" class="inner-bottom-md">

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <section class="our-store section inner-left-xs">
                        <h2 class="bordered">Our Store</h2>
                        <address>
                            17 Princess Road <br/>
                            London, Greater London <br/>
                            NW1 8JR, UK
                        </address>
                        <h3>Hours of Operation</h3>
                        <ul class="list-unstyled operation-hours">
                            <li class="clearfix">
                                <span class="day">Monday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Tuesday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Wednesday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Thursday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Friday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Saturday:</span>
                                <span class="pull-right hours">12-6 PM</span>
                            </li>
                            <li class="clearfix">
                                <span class="day">Sunday</span>
                                <span class="pull-right hours">Closed</span>
                            </li>
                        </ul>
                        <h3>Career</h3>
                        <p>If you're interested in employment opportunities at MediaCenter, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
                    </section><!-- /.our-store -->
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
    <!-- ========================================= MAIN : END ========================================= -->

   </div><!-- /.wrapper -->

@endsection
