
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
@include('frontend.layout.inc.style');
</head>

<body>
    <div class="page-wrapper">
        @include('frontend.layout.inc.header')

        <main class="main">
            @include('frontend.layout.inc.slider')

            <div class="mb-4"></div><!-- End .mb-2 -->

            @include('frontend.layout.inc.Category')
            <div class="mb-3"></div><!-- End .mb-3 -->
            @include('frontend.layout.inc.porduct')
            <div class="mb-3"></div><!-- End .mb-3 -->
        </main><!-- End .main -->

        @include('frontend.layout.inc.footer')
    </div>
    <!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->
    @include('frontend.layout.inc.mobile_menu')
    @include('frontend.layout.inc.modal')
    @include('frontend.layout.inc.script')
</body>
</html>