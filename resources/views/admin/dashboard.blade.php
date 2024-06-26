@extends('layouts.master')
@section('head')
<!-- Head tag -->

<head>
    <meta charset="utf-8" />
    <title>Assessment Task</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Worlds Best Admin UX Dashbaoard PRO version for bootstrap template, Select, Calandar, Report, Charts, Tables etc." name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="admin/assets/img/logoicon.png">

    <!-- g fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
    <!-- g fonts style ends -->

    <!-- Vendor or 3rd party style -->

    <!-- material icons -->
    <link href="admin/assets/vendor/material-icons/material-icons.css" rel="stylesheet">
    <!-- flags icons -->
    <link href="admin/assets/vendor/flags/css/flag-icon.min.css" rel="stylesheet">
    <!-- daterange picker -->
    <link href="admin/assets/vendor/daterangepicker-master/daterangepicker.css" rel="stylesheet">
    <!-- vector map -->
    <link href="admin/assets/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.css" rel="stylesheet">
    <!-- Toast message -->
    <link href="admin/assets/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet">
    <!-- dataTables picker -->
    <link href="admin/assets/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/DataTables-1.10.18/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Vendor or 3rd party style ends -->

    <!-- Customized template style mandatory -->
    <link href="admin/assets/css/style-darkblue-dark.css" rel="stylesheet" id="stylelink">
    <!-- Customized template style ends -->
</head>

<!-- Head tag ends -->
@endsection


@section('content')
    <!-- wrapper starts -->
    <div class="wrapper">
        <div class="content shadow-sm">

            <div class="container-fluid header-container">
                <div class="row header">
                    <div class="container-fluid " id="header-container">
                        <div class="row">
                            <!-- Header starts -->
                            <nav class="navbar col-12 navbar-expand ">
                                <button class="menu-btn btn btn-link btn-sm" type="button">
                                    <i class="material-icons">menu</i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- search starts -->
                                    <form class="form-inline search mr-auto">
                                        <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-link btn-sm" type="submit"><i class="material-icons">search</i></button>
                                    </form>
                                    <!-- search ends -->

                     
                                    <!-- large desktop market rates ends -->

                                    <!-- icons dropwdowns starts -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- flag dropdown-->
                                        <li class="nav-item dropdown select-flag">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown0" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="flag-icon flag-icon-zw"></span>
                                            </a>
                            
                                        </li>

                                        <!-- applicatio quicklinks dropdown-->
                                        <li class="nav-item dropdown d-none d-sm-flex">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">apps</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-center no-defaults pt-0 overflow-hidden" aria-labelledby="navbarDropdown2">
                                                <div class="position-relative text-center rounded">
                                                    <div class="background">
                                                        <img src="admin/assets/img/background-part.png" alt="">
                                                    </div>
                                                    <div class="pt-4 pb-5 text-white">
                                                        <h5 class="font-weight-normal">Quick Access</h5>
                                                        <p>Get Quick access to your<br>favorite applications</p>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="row mx-0 top-60">
                                                    <div class="col-12 col-md-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="card border-0 shadow mb-3">
                                                                    <div class="card-body text-center">
                                                                        <i class="avatar avatar-40 material-icons text-template-primary my-3">favorite</i>
                                                                        <p>Dashboard</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card border-0 shadow mb-3">
                                                                    <div class="card-body text-center">
                                                                        <i class="avatar avatar-40 material-icons bg-light-warning text-warning my-3">style</i>
                                                                        <p>Sidebar</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card border-0 shadow mb-3">
                                                                    <div class="card-body text-center">
                                                                        <i class="avatar avatar-40 material-icons bg-light-danger text-danger my-3">library_books</i>
                                                                        <p>Pages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="card border-0 shadow mb-3">
                                                                    <div class="card-body text-center">
                                                                        <i class="avatar avatar-40 material-icons bg-light-success text-success my-3">poll</i>
                                                                        <p>Charts</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                               

                                        <!-- message dropdown-->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">email</i>
                                                <span class="counter bg-danger">1</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm-left dropdown-menu-center no-defaults pt-0 overflow-hidden" aria-labelledby="navbarDropdown5">
                                                <div class="position-relative text-center rounded">
                                                    <div class="background">
                                                        <img src="admin/assets/img/background-part.png" alt="">
                                                    </div>
                                                    <div class="py-3 text-white">
                                                        <h5 class="font-weight-normal">Messages</h5>
                                                        <p>Updates and Status</p>
                                                    </div>

                                                </div>
                                                <div class="scroll-y h-320 d-block">
                                                    <a class="dropdown-item border-top new" href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">local_mall</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">New Order received</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">Order from Anand Mhatva recieved for Electronics with 6 quanity.</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top " href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">account_balance_wallet</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Balance has benn added</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">Order from Anand Mhatva recieved for Electronics with 6 quanity.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top " href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">account_circle</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Friend request received</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">New friend request received from Mickey John from Australia</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top" href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">check_circle</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Email Updated</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">Your email change request has been successfully updated</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top " href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">account_balance_wallet</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Balance has benn added</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">Order from Anand Mhatva recieved for Electronics with 6 quanity.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top " href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">account_circle</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Friend request received</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">New friend request received from Mickey John from Australia</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item border-top" href="#">
                                                        <div class="row">
                                                            <div class="col-auto align-self-center">
                                                                <i class="material-icons text-template-primary">check_circle</i>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <div class="row mb-1">
                                                                    <div class="col">
                                                                        <p class="mb-0">Email Updated</p>
                                                                    </div>
                                                                    <div class="col-auto pl-0">
                                                                        <p class="small text-mute text-trucated mt-1">2/12/2019</p>
                                                                    </div>
                                                                </div>
                                                                <p class="small text-mute">Your email change request has been successfully updated</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- profile dropdown-->
                                        <li class="nav-item dropdown ml-0 ml-sm-4">
                                            <a class="nav-link dropdown-toggle profile-link" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <figure class="rounded avatar avatar-30">
                                                    <img src="admin/assets/img/user1.png" alt="">
                                                </figure>
                                                <div class="username-text ml-2 mr-2 d-none d-lg-inline-block">
                                                    <h6 class="username"><span>Welcome,</span>Maxartkiller</h6>
                                                </div>
                                                <figure class="rounded avatar avatar-30 d-none d-md-inline-block">
                                                    <i class="material-icons">expand_more</i>
                                                </figure>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right w-300 pt-0 overflow-hidden" aria-labelledby="navbarDropdown6">
                                                <div class="position-relative text-center rounded py-5">
                                                    <div class="background">
                                                        <img src="admin/assets/img/background-part.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="text-center mb-3 top-60 z-2">
                                                    <figure class="avatar avatar-120 mx-auto shadow"><img src="admin/assets/img/user1.png" alt=""></figure>
                                                </div>
                                                <h5 class="text-center mb-0">Maxartkiller</h5>
                                                <p class="text-center">UX Designer</p>
                                                <p class="text-center text-secondary fs13">Delhi, India</p>
                                                <a class="dropdown-item border-top" href="#">
                                                    <div class="row">
                                                        <div class="col-auto align-self-center">
                                                            <i class="material-icons text-success">account_box</i>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <p class="mb-0">My Profile</p>
                                                            <p class="small text-mute text-trucated">Update details and information</p>
                                                        </div>
                                                        <div class="col-auto align-self-center text-right pl-0">
                                                            <i class="material-icons text-mute small">chevron_right</i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-top" href="#">
                                                    <div class="row">
                                                        <div class="col-auto align-self-center">
                                                            <i class="material-icons text-info">account_balance_wallet</i>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <p class="mb-0">My Wallet</p>
                                                            <p class="small text-mute text-trucated">Add Money or withdrow</p>
                                                        </div>
                                                        <div class="col-auto align-self-center text-right pl-0">
                                                            <i class="material-icons text-mute small">chevron_right</i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-top" href="#">
                                                    <div class="row">
                                                        <div class="col-auto align-self-center">
                                                            <i class="material-icons text-warning">date_range</i>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <p class="mb-0">My Schedule</p>
                                                            <p class="small text-mute text-trucated">Appointments and schedules</p>
                                                        </div>
                                                        <div class="col-auto align-self-center text-right pl-0">
                                                            <i class="material-icons text-mute small">chevron_right</i>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-top" href="#">
                                                    <div class="row">
                                                        <div class="col-auto align-self-center">
                                                            <i class="material-icons text-danger">exit_to_app</i>
                                                        </div>
                                                        <div class="col pl-0">
                                                            <p class="mb-0 text-danger">Lougout</p>
                                                        </div>
                                                        <div class="col-auto align-self-center text-right pl-0">
                                                            <i class="material-icons text-mute small text-danger">chevron_right</i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- icons dropwdowns starts -->
                                </div>
                            </nav>
                            <!-- Header ends -->
                        </div>
                    </div>
                </div>
                <div class="row submenu">
                    <div class="container-fluid " id="submenu-container">
                        <div class="row">
                            <!-- Submenu section starts -->
                            <nav class="navbar col-12 ">
                                <div class="dropdown mr-auto d-flex d-sm-none">
                                    <button class="btn dropdown-toggle btn-sm btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dashboard
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dashboard</a>
                                        <a class="dropdown-item" href="#">Featured</a>
                                        <a class="dropdown-item" href="#">popular</a>
                                    </div>
                                </div>
                                <ul class="nav nav-pills mr-auto d-none d-sm-flex">
                                    <li class="nav-item ">
                                        <a class="nav-link active" href="#">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">popular</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills ml-auto d-none d-xl-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">This week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">This Month</a>
                                    </li>
                                </ul>
                                <form class="form-inline ml-auto ml-sm-3">
                                    <div id="daterangeadminux" class="form-control form-control-sm">
                                        <span></span> <i class="material-icons avatar avatar-26 text-template-primary cal-icon">event</i>
                                    </div>

                                </form>
                            </nav>
                            <!-- Submenu section ends -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main container starts -->
            <div class="container main-container" id="main-container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card border-0 shadow-sm overflow-hidden mb-4">
                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col py-2 pr-0">
                                        <p>Total Properties</p><br>
                                        <h4 class="font-weight-light mb-0">COUNT HERE</h4>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
           
             
                </div>
         
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-8 mb-4">
                        <div class="card border-0 shadow-sm overflow-hidden h-100">
                            <div class="card-header border-0 bg-none">
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <p class="fs15">Latest Properties<br></p>
                                    </div>
                                    <form class="form-inline search col-auto align-self-center px-0">
                                        <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-link btn-sm" type="submit"><i class="material-icons">search</i></button>
                                    </form>
                                    <div class="col-auto align-self-center">
                                        <button class="btn btn-sm btn-outline-template ml-2">
                                            <i class="material-icons md-18">cloud_download</i> Export
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <table class="table datatable display responsive w-100">
                                    <thead>
                                        <tr>
                                  
                                            <th class="min-tablet">Order From</th>
                                            <th class="min-desktop">Date</th>
                                            <th class="">Status</th>
                                            <th class="min-desktop">Order Receiver </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                       
                                            <td>
                                                <div class="media">
                                                    <figure class="mb-0 avatar avatar-40 mr-2">
                                                        <img src="admin/assets/img/user3.png" alt="">
                                                    </figure>
                                                    <div class="media-body">
                                                        <p class="mb-0 template-inverse">John Alexandar</p>
                                                        <p class="text-template-primary-light">Sydney, Australia</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>12-12-2019</td>
                                            <td>
                                                <div class="btn-danger btn btn-sm">Accepted</div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <figure class="mb-0 avatar avatar-40 mr-2">
                                                        <img src="admin/assets/img/user1.png" alt="">
                                                    </figure>
                                                    <div class="media-body">
                                                        <p class="mb-0 template-inverse">Sonya Wilson</p>
                                                        <p class="text-template-primary-light">Aquaguaard Manager</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle btn-sm btn-link" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">more_horiz</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">View</a>
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                 
                </div>
       
            </div>
            <!-- Main container ends -->


        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md text-center text-md-left align-self-center">
                        <p>Assessment Task Done By <a href="">Gladman Nyamugoneka</a></p>
                    </div>
             
                </div>
            </div>
        </footer>

    </div>
    <!-- wrapper ends -->
@endsection



@section('footerscript')
    <!-- Global js mandatory -->
    <script src="admin/assets/js/jquery-3.3.1.min.js"></script>
    <script src="admin/assets/js/popper.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Global js ends -->

    <!-- Vendor or 3rd party js -->

    <!-- date range picker -->
    <script src="admin/assets/vendor/daterangepicker-master/moment.min.js"></script>
    <script src="admin/assets/vendor/daterangepicker-master/daterangepicker.js"></script>
    <!-- Chart js -->
    <script src="admin/assets/vendor/chartjs/Chart.min.js"></script>
    <script src="admin/assets/vendor/chartjs/utils.js"></script>
    <!-- Circular progress js  -->
    <script src="admin/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <!-- Sparklines js  -->
    <script src="admin/assets/vendor/sparklines/jquery.sparkline.min.js"></script>
    <!-- DataTables js  -->
    <script src="admin/assets/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="admin/assets/vendor/DataTables-1.10.18/js/dataTables.responsive.min.js"></script>
    <script src="admin/assets/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!-- vector maps js  -->
    <script src="admin/assets/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="admin/assets/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- vector maps js  -->
    <script src="admin/assets/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
    
    <!-- Vendor or 3rd party js ends -->

    <!-- Customized template js mandatory -->
    <script src="admin/assets/js/main.js"></script>
    <!-- Customized template js ends -->

    <!-- theme picker -->
    <script src="admin/assets/js/style-picker.js"></script>
    <!-- theme picker ends -->

    <!-- Customized page level js -->
    <script src="admin/assets/js/production-dashboard.js"></script>
    <script>
    </script>
    <!-- Customized page level js ends -->
@endsection