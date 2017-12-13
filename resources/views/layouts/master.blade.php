<!DOCTYPE html>
<html lang="en">

<head>

    <title>Inventory Management System</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <link href="{{ asset('datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

       @include('layouts.navbar.nav')

        <div id="page-wrapper">
            <div class="container-fluid">
                                  
                        @yield('content')
              
            </div>
        </div>

    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('datatables-plugins/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('datatables-responsive/dataTables.responsive.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

</body>

</html>
