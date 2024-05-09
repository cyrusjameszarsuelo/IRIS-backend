<!DOCTYPE html>
<html>
<head>
	@include('admin/includes/header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

	<div class="wrapper">
		@include('admin/includes/navbar')
		@include('admin/includes/sidebar')

		<div class="content-wrapper">

			@yield('content')

		</div>

		<footer class="main-footer">
			<strong>Copyright &copy;{{date('Y')}} <a href="">i21recruitment</a>.</strong>
			All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	@include('admin/includes/footer')
	@yield('scripts')
</body>
</html>