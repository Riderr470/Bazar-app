<!DOCTYPE html>
<html lang="en">

<head>
  @notifyCss
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Market Bazar</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/css/style.css">
  <!-- End layout styles -->

</head>

<body>

  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->

    @include('backend.partials.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      @include('backend.partials.sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        @include('backend.partials.footer')

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/js/off-canvas.js"></script>
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/js/hoverable-collapse.js"></script>
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="https://demo.bootstrapdash.com/connect-plus-free/jquery/template/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->

  @include('notify::components.notify')

  @notifyJs
</body>

</html>