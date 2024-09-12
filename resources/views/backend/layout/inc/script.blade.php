<!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/backend/') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets/backend/') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('assets/backend/') }}/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{ asset('assets/backend/') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('assets/backend/') }}/vendor/morris/morris.min.js"></script>


    <script src="{{ asset('assets/backend/') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('assets/backend/') }}/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('assets/backend/') }}/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('assets/backend/') }}/vendor/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets/backend/') }}/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/backend/') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{ asset('assets/backend/') }}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('assets/backend/') }}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('assets/backend/') }}/vendor/jquery.counterup/jquery.counterup.min.js"></script>

{{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src="{{ asset('assets/backend/') }}/js/dashboard/dashboard-1.js"></script>

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/backend/') }}/bootstrap/js/bootstrap.bundle.min.js"></script>

    @stack('admin_script')