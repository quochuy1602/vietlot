<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" >
	<link href="{{ asset('public/css/style-admin.css')}}" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/jquery/jquery.js')}}"></script>
    <script src="{{ asset('public/jquery/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/jquery/admin.js')}}"></script>
	<script src="{{ asset('public/ckeditor/ckeditor.js')}}"></script>

</head>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="#"><img src="{{ asset('public/images/logo.png')}}" alt="vaithun_logo" class="hidden-xs hidden-sm">
                        <img src="{{ asset('public/images/logo.png')}}" alt="vaithun_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class='{{ $nav == "dashboard" ? "active" : "" }}'><a href="{{ url('admin/')}}"><i class="fa fa-dashboard" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                        <li class='{{ $nav == "category" ? "active" : "" }}'><a href="{{ url('admin/category')}}"><i class="fa fa-list" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Category</span></a></li>
                        <li class='{{ $nav == "product" ? "active" : "" }}'><a href="{{ url('admin/product')}}"><i class="fa fa-product-hunt " aria-hidden="true"></i><span class="hidden-xs hidden-sm">Products</span></a></li>
                        <li class='{{ $nav == "store" ? "active" : "" }}'><a href="{{ url('admin/store')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Stores</span></a></li>
                        <li class='{{ $nav == "contact" ? "active" : "" }}'><a href="{{ url('admin/contact')}}"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contact</span></a></li>
                        <li class='{{ $nav == "users" ? "active" : "" }}'><a href="{{ url('admin/users')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li class='{{ $nav == "setting" ? "active" : "" }}'><a href="{{ url('admin/setting')}}"><i class="fa fa-wrench" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                               {{-- <input type="text" placeholder="Search" id="search">--}}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs">
                                       {{-- <a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a>--}}
                                    </li>
                                   {{-- <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>--}}
                                    <li class="dropdown">
                                         @if (Auth::guest())
                                            <li><a href="{{url("/login")}}">Login</a></li>
                                            <li><a href="{{url("/register")}}">Register</a></li>
                                         @else
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-content">
                                                        <span>{{ Auth::user()->userName }}</span>
                                                        <p class="text-muted small">
                                                            {{ Auth::user()->email }}
                                                        </p>

                                                    </div>
                                                    <a href="{{url('admin/profile')}}"> <i  class="fa fa-fw fa-user"></i>View Profile</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                                </li>
                                            </ul>
                                         @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                     <div class="row">
                          @yield('content')
                     </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    {{--<div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>--}}
</body>
</html>