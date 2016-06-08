<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Head Section -->
		@include('includes.head')
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">
		
		<!-- Header Bar -->
		@if(!Request::is('/'))
			@include('includes.header')
		@endif
		
		<!-- Content -->
		@yield('content')

		<!-- Menu Sidebar -->
		@if(!Request::is('/'))
			@include('includes.menu')
		@endif

		<!-- Footer -->
		@include('includes.footer')

	</body>
</html>