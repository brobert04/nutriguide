<html lang="en">
@include('nutriguide.users.dashboard.partials.header')
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <!-- Navbar -->
   @include('nutriguide.users.dashboard.partials.navbar')
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('nutriguide.users.dashboard.partials.scripts')
</body>
</html>


