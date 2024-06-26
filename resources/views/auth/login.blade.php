<!DOCTYPE html>
<!-- 
Template Name: AdminUX-Pro - Responsive Admin Dashboard Template build with Bootstrap 4.3.1
Version: 1.0.0
Author: Maxartkiller
Website: https://www.maxartkiller.com/
Contact: info@maxartkiller.com
Follow: www.twitter.com/maxartkiller
Like: www.facebook.com/maxartkiller
Purchase: https://www.maxartkiller.com/
License: You must have a valid license purchased only from maxartkiller.com in order to legally use the theme for your project.
-->
<html lang="en">

<!-- Head tag -->

<head>
    <meta charset="utf-8" />
    <title>Assessment Task</title>
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

    <!-- Vendor or 3rd party style ends -->

    <!-- Customized template style mandatory -->
    <link href="../assets/css/style-darkblue-dark.css" rel="stylesheet" id="stylelink">
    <!-- Customized template style ends -->
</head>

<!-- Head tag ends -->

<!-- Body -->

<body class="h-100 no-sidemenu">
    <div class="loader container-fluid">
        <div class="row h-100">
            <div class="col-auto align-self-center  mx-auto text-center">
                <div class="loader-ripple"><div></div><div></div></div>
                <h2>Assemment Task</h2>
                <p>Property Book</p>
            </div>
        </div>
    </div>


    <div class="wrapper">
        <div class="content shadow-sm position-relative">
            <header class="header">
                <!-- Fixed navbar -->
                <nav class="container-fluid">
                    <div class="row">
                    
                    </div>
                </nav>
            </header>
            <div class="background opac blur">
                <img src="../assets/img/team.jpg" alt="">
            </div>

            <!-- Main container starts -->
            <div class="container main-container" id="main-container">
                <div class="row login-row-height">
                    <div class="col-12 col-md-6 col-lg-7 d-none d-md-flex"></div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4  align-self-center">
                        <div class="card border-0 shadow-lg blur">
                            <div class="card-body py-5">
                                <h5 class="font-weight-light mb-1 text-mute-high">Welcome,</h5>
                                <h3 class="font-weight-normal mb-4">Please Sign In</h3>
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @csrf
            
                                    <div class="card  mb-2 overflow-hidden">
                                        <div class="card-body p-0">
                                            <label for="inputEmail" class="sr-only">Email address</label>
                                            <input type="email" id="email" name="email" class="form-control rounded-0 border-0" placeholder="Email address" required autofocus>
                                            <hr class="my-0">
                                            <label for="inputPassword" class="sr-only">Password</label>
                                            <input type="password" id="password" name="password" class="form-control rounded-0 border-0" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="my-3 row">
                                        <!-- Any additional form fields or elements can go here -->
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
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
                        <p>Assessment Task done by <a href="">Gladman Nyamugoneka</a></p>
                    </div>
            
                </div>
            </div>
        </footer>

    </div>
    <!-- wrapper ends -->


    <!-- Global js mandatory -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script><script src="../assets/vendor/cookie/jquery.cookie.js"></script>
    <!-- Global js ends -->

    <!-- Vendor or 3rd party js -->

    <!-- date range picker -->
    <script src="../assets/vendor/daterangepicker-master/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker-master/daterangepicker.js"></script>
    <!-- Vendor or 3rd party js ends -->

    <!-- Customized template js mandatory -->
    <script src="../assets/js/main.js"></script>
    <!-- Customized template js ends -->

    <!-- theme picker -->
    <script src="../assets/js/style-picker.js"></script>
    <!-- theme picker ends -->

    <!-- Customized page level js -->
    <script>
        'use strict'
        $(document).ready(function() {

        });

    </script>
    <!-- Customized page level js ends -->
</body>

<!-- Body ends -->

</html>
