<!DOCTYPE html>
<html lang="en">
	@section('initialScripts')
		@include('template.initialScripts')
	@show
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('{{ asset('assets/img/logo_imias.png') }}'); background-size: auto;"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">Geriatría y Gerontología</span>
							<br/><br/>
							<form class="form floating-label" action="{{ route('login') }}" accept-charset="utf-8" method="post">
                                {{ csrf_field() }}
								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
									<input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
									<label for="email">Usuario o correo electrónico</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
								</div>
								<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
									<input type="password" class="form-control" id="password" name="password" required>
									<label for="password">Contraseña</label>
									<p class="help-block"><a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a></p>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Recordarme</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit">Entrar</button>
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
