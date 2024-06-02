<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Fixed Sidebar</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toastify/toastr.css') }} ">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <style>
        /* CSS untuk menyembunyikan scrollbar di browser webkit */
        .scrollbar::-webkit-scrollbar {
            display: none;
        }

        .content-wrapper::-webkit-scrollbar {
            display: none;
        }

        .fs-1 {
            font-size: calc(1.375rem + 1.5vw) !important;
        }

        .fs-2 {
            font-size: calc(1.325rem + 0.9vw) !important;
        }

        .fs-3 {
            font-size: calc(1.3rem + 0.6vw) !important;
        }

        .fs-4 {
            font-size: calc(1.275rem + 0.3vw) !important;
        }

        .fs-5 {
            font-size: 1.25rem !important;
        }

        .fs-6 {
            font-size: 1rem !important;
        }

        .fs-7 {
            font-size: 0.9rem !important;
        }

        .fs-8 {
            font-size: 0.8rem !important;
        }

        #comment-input:focus {
            outline: none;
            border: none;
        }

        .fw-bold {
            font-weight: 700 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        @include('patrial.sidebar')

        <div class="content-wrapper bg-white">
            @yield('content')
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('toastify/toastr.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            alert('ww')

        });

        function showToast() {
            Toastify({
                text: "Hello, this is a toast message!",
                duration: 3000, // Durasi tampilan pesan toast (dalam milidetik)
                gravity: "top", // Posisi pesan toast (top, bottom, atau center)
                position: 'left', // Posisi horizontal (left, center, right)
            }).showToast();
        }
    </script>
</body>

</html>
