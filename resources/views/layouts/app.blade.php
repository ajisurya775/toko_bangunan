<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Toko Ud.Rizki</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('template_admin/assets/scss/style.css')}}">
    <link href="{{ asset('template_admin/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template_admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

        @include('components.navbar')
        <!-- Header-->
        @yield('breadcrumbs')

        @yield('content')
        

        
            
    <!-- Right Panel -->

    <script src="{{ asset('template_admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('template_admin/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/main.js')}}"></script>


    <script src="{{ asset('template_admin/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/widgets.js')}}"></script>

    <script src="{{ asset('template_admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/pdfmake.min.js')}}assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('template_admin/assets/js/lib/data-table/datatables-init.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

</body>
</html>
