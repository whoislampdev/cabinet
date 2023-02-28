<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> CMYFN</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- datatable -->
    <link href="../plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="layout-wrapper">
        @include('pharmacie.navbar')        
            @include('pharmacie.sidebar')
        <div class="header-border"></div>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metismenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/simplebar.min.js"></script>


    <!-- Sparkline Js-->
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Js-->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- Chart Custom Js-->
    <script src="assets/pages/knob-chart-demo.js"></script>


    <!-- Morris Js-->
    <script src="../plugins/morris-js/morris.min.js"></script>

    <!-- Raphael Js-->
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

    <!-- datatable -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.flash.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="../plugins/datatables/dataTables.select.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/pages/datatables-demo.js"></script>
</body>

</html>