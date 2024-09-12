
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('admin_title') </title>
    @include('backend/layout/inc/style')
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
           site logo start
        ***********************************-->
        @include('backend.layout.inc.logo')
            <!--**********************************
                site logo end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
        @include('backend.layout.inc.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('backend.layout.inc.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('admin_content')
            </div>
        </div>

        <!--*Content body end*-->
        <!--*Footer start*-->
        @include('backend.layout.inc.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('backend.layout.inc.script')

    {!! Toastr::message() !!}
</body>

</html>