<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
<div class="container position-sticky z-index-sticky top-0">
    @include('includes.navbarwebsite')
</div>
<header class="header">
    @include('includes.headerwebsite')
</header>
{{--<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">--}}
{{--    <div class="container-fluid py-4">--}}
        @yield('content')
{{--    </div>--}}
{{--</main>--}}
<footer class="footer py-4  ">
    @include('includes.footer')
</footer>
<!--   Core JS Files   -->
@include('includes.script')
</body>

</html>
