<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assetvendors/ti-icons/css/themify-icons.css"') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <x-partial.navbar />

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <x-partial.sidebar />
            <!-- partial -->
            <div class="main-panel">
                <!--content-wrapper-->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
                <x-partial.footer></x-partial.footer>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('asset/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('asset/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('asset/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('asset/js/off-canvas.js') }}"></script>
    <script src="{{ asset('asset/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('asset/js/template.js') }}"></script>
    <script src="{{ asset('asset/js/settings.js') }}"></script>
    <script src="{{ asset('asset/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('asset/js/dashboard.js') }}"></script>
    <script src="{{ asset('assetjs/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
