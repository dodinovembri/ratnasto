<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Ratna Store">
    <meta name="author" content="Ratna Store">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.png') }}">

    <title>Administrator</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/lib/prismjs/themes/prism-tomorrow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">      

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/cassie.css') }}">
  </head>
  <body>

    @yield('content')

    <script src="{{ asset('backend/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('backend/lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <script src="{{ asset('backend/assets/js/cassie.js') }}"></script>
    <script src="{{ asset('backend/assets/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard-one.js') }}"></script>

    <script src="{{ asset('backend/lib/prismjs/prism.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>

    <script>
      $(function(){
        'use strict'

        $('#example1').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#example2').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#example3').DataTable({
          'ajax': "{{ asset('backend/assets/data/datatable-arrays.txt') }}",
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#example4').DataTable({
          'ajax': "{{ asset('backend/assets/data/datatable-objects.txt') }}",
          "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "salary" }
          ],
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>     
  </body>
</html>
