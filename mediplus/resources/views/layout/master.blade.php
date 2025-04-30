<!doctype html>
<html class="no-js" lang="zxx">

    @include('layout.head')
    <body>


		@include('layout.header')

		<!-- container -->
        @yield('content')
        <!-- End Of Container -->
		<!-- Footer Area -->
		@include('layout.footer')
		<!--/ End Footer Area -->

		@include('layout.script')
    </body>
</html>
