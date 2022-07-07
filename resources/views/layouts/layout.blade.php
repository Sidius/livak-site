<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/front/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    @vite([
        'resources/assets/front/lib/owlcarousel/assets/owl.carousel.min.css',
        'resources/assets/front/lib/lightbox/css/lightbox.min.css',
        'resources/assets/front/css/style.min.css',
    ])
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front/lib/typed/typed.min.js') }}"></script>
<script src="{{ asset('assets/front/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/front/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/front/lib/lightbox/js/lightbox.min.js') }}"></script>

@vite([
    'resources/assets/front/mail/jqBootstrapValidation.min.js',
    'resources/assets/front/mail/contact.js',
    'resources/assets/front/js/main.js',
])

<!-- Contact Javascript File -->
{{--<script src="assets/front/mail/jqBootstrapValidation.min.js"></script>--}}
{{--<script src="assets/front/mail/contact.js"></script>--}}

<!-- Template Javascript -->
{{--<script src="js/main.js"></script>--}}
</body>

</html>
