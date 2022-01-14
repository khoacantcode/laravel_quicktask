<!DOCTYPE html>
<html lang="en">
	@include('home.layouts.head')
	<body>
		<!-- ======= Header ======= -->
		@include('home.layouts.header')
		<!-- End Header -->
		<!-- ======= Hero Section ======= -->
		@include('home.layouts.hero')
		<!-- ======= Content ======= -->
		@yield('home_content')
		<!-- ======= Footer ======= -->
		@include('home.layouts.footer')
		<!-- End Footer -->
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		<!-- Vendor JS Files -->
		@include('home.layouts.script')
	</body>
</html>
