

<!-- Sidebar starts -->
<div class="sidebar">
    <!-- Logo sidebar -->
    <a href="" class="logo">
        <img src="/assets/img/logoicon.svg" alt="" class="logo-icon">
        <div class="logo-text">
            <h5 class="fs22 mb-0"><sup class="badge badge-danger">PROPERTY LISTING</sup></h5>
            <p class="text-uppercase fs11">Admin Dashboard</p>
        </div>
    </a>
    <!-- Logo sidebar ends -->

    <!-- Navigation menu sidebar-->
    <h6 class="subtitle fs11">Navigation Menu</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)"><i class="material-icons icon">dashboard</i><span>Dashboard</span> <i class="material-icons arrow">expand_more</i></a>
            <div class="nav flex-column">
                <div class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><span>SUMMARY DASHBOARD</span></a></div>
            </div>
        </li>
    </ul>
    <h6 class="subtitle fs11">Property Management</h6>
    <ul class="nav flex-column">
        <li class="nav-item dropdown">
            <div class="nav-item"><a class="nav-link" href="{{ route('display.properties') }}"><span>View Property **Images</span></a></div>
            <div class="nav-item"><a class="nav-link" href="{{ route('property.data') }}"><span>Property Data Table</span></a></div>
            <div class="nav-item"><a class="nav-link" href="{{ route('titles.index') }}"><span>Titles</span></a></div>
            <div class="nav-item"><a class="nav-link" href="{{ url("compose-mail") }}"><span>Log out</span></a></div>
        </li>
    </ul>
</div>
<!-- Sidebar ends -->