<!DOCTYPE html>
<html>
	@section('initialScripts')
		@include('template.initialScripts')
	@show

	<body class="menubar-hoverable header-fixed menubar-pin menubar-first">

		<!-- BEGIN HEADER-->
		@section('header')
			@include('template.header')
		@show

		<!-- BEGIN BASE-->
		<div id="base">
			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section  id="app">
					{{--<div class="section-header">
						<ol class="breadcrumb">
							<li><a href="../../html/.html">home</a></li>
							<li class="active">Blank page</li>
						</ol>
					</div>--}}<!--end .section-header -->
					<div class="section-body">
						@yield('content')
					</div><!--end .section-body -->
				</section>
				<!-- BEGIN BLANK SECTION -->



			</div><!--end #content-->


			<!-- END CONTENT -->
			@section('menu')
				@include('template.menu')
			@show

			@section('canvasChat')
				@include('template.canvasChat')
			@show

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->

		@section('finalScripts')
			@include('template.finalScripts')
		@show

		@yield('javascript')
		<!-- END JAVASCRIPT -->
	</body>
</html>
