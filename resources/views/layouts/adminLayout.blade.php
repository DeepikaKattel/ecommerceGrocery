<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      {{--  For search autocomplete  --}}
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark elevation-2">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="/images/logo.PNG" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Community Mart</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">HOME</li>
                <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-header">FIELDS</li>

        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                <p>
                    Products
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/itemlist/add" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Add Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/itemlist/" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List Products</p>
                    </a>
                </li>
            </ul>
        </li>
        @if (Auth::user()->isAdmin())
{{--        <li class="nav-item">--}}
{{--            <a href="/admin/vendor" class="nav-link">--}}
{{--                <i class="fas fa-store nav-icon"></i>--}}
{{--                <p>Vendors</p>--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/user/add" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Add User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/userlist" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List User</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                    Departments
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/department/add" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Add Department</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/departmentList" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List Departments</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                      Frontend
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('frontend.create')}}" class="nav-link">
                      <i class="fas fa-plus nav-icon"></i>
                      <p>Add Content</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('frontend.index')}}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>List Content</p>
                      </a>
                  </li>
              </ul>
          </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    About Us
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('aboutUs.create')}}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aboutUs.index')}}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>List Content</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Banners
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('banner.create')}}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('banner.index')}}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>List Content</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-circle-notch"></i>
                <p>
                    Popup
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('popup.create')}}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('popup.index')}}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>List Content</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-barcode"></i>
                <p>
                     Barcode
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('barcode.create')}}" class="nav-link">
                        <i class="fas fa-plus nav-icon"></i>
                        <p>Add Content</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('barcode.index')}}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>List Content</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{url('/file-import-export')}}" class="nav-link">
                Import Products
                <i class="nav-icon fas fa-git-square"></i>
{{--                <p>--}}
{{--                    Import Products--}}
{{--                    <a href="" class="nav-link"></a>--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                </p>--}}
            </a>

        </li>
          <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Contact
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/contact/list" class="nav-link">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List Contacts</p>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        <li class="nav-item">
            <a href="/admin/checkouts" class="nav-link">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>New Checkouts</p>
            </a>
        </li>
    </ul>
</nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pb-2">

            @yield('content')

        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('Admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('Admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('Admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('Admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('Admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('Admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('Admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('Admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('Admin/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('Admin/dist/js/demo.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $( "#searchProduct" ).autocomplete({

                source: function(request, response) {
                    $.ajax({
                        url: "{{url('livesearch')}}",
                        data: {
                            term : request.term
                        },
                        dataType: "json",
                        success: function(data){
                            var resp = $.map(data,function(obj){
                                //console.log(obj.city_name);
                                return obj.name;
                            });

                            response($.ui.autocomplete.filter(resp, request.term));
                        }
                    });
                },
                minLength: 1
            });
        });

    </script>
  </body>
</html>
