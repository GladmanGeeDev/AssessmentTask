@extends('layouts.master')
@section('head')

<head>
    <meta charset="utf-8" />
    <title>AdminUX-PRO | Admin Dashboard HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Worlds Best Admin UX Dashbaoard PRO version for bootstrap template, Select, Calandar, Report, Charts, Tables etc." name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="../assets/img/logoicon.png">

    <!-- g fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
    <!-- g fonts style ends -->

    <!-- Vendor or 3rd party style -->

    <!-- material icons -->
    <link href="../assets/vendor/material-icons/material-icons.css" rel="stylesheet">
    <!-- flags icons -->
    <link href="../assets/vendor/flags/css/flag-icon.min.css" rel="stylesheet">
    <!-- daterange picker -->
    <link href="../assets/vendor/daterangepicker-master/daterangepicker.css" rel="stylesheet">
    <!-- footable CSS -->
    <link href="../assets/vendor/footable-bootstrap/css/footable.bootstrap.min.css" rel="stylesheet">

    <!-- Vendor or 3rd party style ends -->

    <!-- Customized template style mandatory -->
    <link href="../assets/css/style-darkblue-dark.css" rel="stylesheet" id="stylelink">
    <!-- Customized template style ends -->
</head>
<!-- Head tag ends -->

@endsection

<!-- Head tag ends -->

<!-- Body -->

@section('content')

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
                                                    <img src="../assets/img/background-part.png" alt="">
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
                                                    <img src="../assets/img/background-part.png" alt="">
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
                                                <img src="../assets/img/user1.png" alt="">
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
                                                    <img src="../assets/img/background-part.png" alt="">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3 top-60 z-2">
                                                <figure class="avatar avatar-120 mx-auto shadow"><img src="../assets/img/user1.png" alt=""></figure>
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
                                                        <p class="mb-0 text-danger">Logout</p>
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
        </div>

        <!-- Main container starts -->
        <div class="container main-container" id="main-container">
            <div class="row">
                <div class="col-12 col-md-11 col-lg-10 col-xl-8 mx-auto align-self-center">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10 mx-auto">
                                    <div class="row ">
                                        <div class="col-lg-12 col-md-12 text-center">
                                        
                                            <h1 class="mt-4">Add Property</h1>
                                          
                                        </div>
                                    </div>
                                    <br>
                                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mt-4">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Property Name</label>
                                    
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Location</label>
                                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Price</label>
                                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Description</label>
                                                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                            </div>
                                        </div>
    
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>Attachments</label>
                                                <br>
                                                <div class="custom-dropzone text-center align-items-center dz-clickable" id="my-dropzone">
                                                    
                                                    <input type="file" class="form-control" id="image" name="image">
                                                </div>
    
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                    
                                        
                                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                                        </div>

                                    </form>
                                 
                
                                </div>
                            </div>
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
                    <p>Assessment task done by <a href="">Gladman Nyamugoneka</a></p>
                </div>
                <div class="col-12 col-md-auto text-center text-md-right">
                    <ul class="nav justify-content-center justify-md-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Terms of use</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>


@endsection

@section('footerscript')
    <!-- Global js mandatory -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Global js ends -->

    <!-- Vendor or 3rd party js -->

    <!-- date range picker -->
    <script src="../assets/vendor/daterangepicker-master/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker-master/daterangepicker.js"></script>
    <!-- Footable jquery file -->
    <script src="../assets/vendor/footable-bootstrap/js/footable.min.js"></script>

    <!-- Vendor or 3rd party js ends -->

    <!-- Customized template js mandatory -->
    <script src="../assets/js/main.js"></script>
    <!-- Customized template js ends -->

    <!-- theme picker -->
    <script src="../assets/js/style-picker.js"></script>
    <!-- theme picker ends -->

    <!-- Customized page level js -->
    <script>
        'user strict'
        $(document).ready(function() {

            /* footable  */
            $(".footable").footable({
                "paging": {
                    "enabled": true,
                    "position": "center"
                }
            });


        });

    </script>
    <!-- Customized page level js ends -->
@endsection
