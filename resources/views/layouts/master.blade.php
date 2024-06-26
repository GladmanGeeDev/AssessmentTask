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

@yield('head')

<!-- Body -->

<body class="template-bg sidemenu-open">
    @include('layouts.partials.header')

    <!-- wrapper starts -->
    @yield('content')
    <!-- wrapper ends -->

    @include('layouts.partials.footer')



    @yield('footerscript')
</body>

<!-- Body ends -->

</html>
