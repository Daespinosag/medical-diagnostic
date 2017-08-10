<!DOCTYPE html>
<html>
@section('initialScripts')
    @include('template.initialScripts')
@show

<body class="menubar-hoverable header-fixed menubar-pin ">

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN CONTENT-->
    <div id="content">
        <section id="app">
            <!-- BEGIN BLANK SECTION -->
            @yield('content')
        </section>
    </div><!--end #content-->

    <!-- END CONTENT -->

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
