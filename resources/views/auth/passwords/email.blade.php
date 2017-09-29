<!DOCTYPE html>
<html lang="en">
	@section('initialScripts')
		@include('template.initialScripts')
	@show
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('{{ asset('assets/img/logo_clinica.png') }}'); background-size: auto;"
			style="font-size: 60px; text-align: center;">
				{{--<br>
				Gerontología y Geriatría--}}
			</div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">Restablecer contraseña</span>
							<br/><br/>

							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							<form class="form floating-label" action="{{ route('password.email') }}" accept-charset="utf-8" method="post">
                                {{ csrf_field() }}
								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
									<input type="text" class="form-control" id="username" name="username" value="{{ old('email') }}" required autofocus>
									<label for="username">Correo electrónico</label>
									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>

								<br/>
								<div class="row">
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit">Enviar enlace para restablecer contraseña</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
                    </div><!--end .row -->
                </div><!--end .card-body -->
            </div><!--end .card -->
        </section>
        <!-- END LOGIN SECTION -->

        <!-- BEGIN JAVASCRIPT -->

        @section('finalScripts')
            @include('template.finalScripts')
        @show

        @yield('javascript')
        <!-- END JAVASCRIPT -->

    </body>
</html>
