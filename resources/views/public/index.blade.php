@extends('template.main')

@section('title', 'Inicio')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.index') }}">Inicio</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Inicio</h1>
                </div><!--end .col -->

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Grupo de Investigación en Gerontología y Geriatría</h2>
                    {{--<h2 class="text-primary">Clínica de inestabilidad vértigo, caídas y fracturas</h2>--}}
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                            <li data-target="#myCarousel" data-slide-to="9"></li>
                            <li data-target="#myCarousel" data-slide-to="10"></li>
                            <li data-target="#myCarousel" data-slide-to="11"></li>
                            <li data-target="#myCarousel" data-slide-to="12"></li>
                            <li data-target="#myCarousel" data-slide-to="13"></li>
                            <li data-target="#myCarousel" data-slide-to="14"></li>
                            <li data-target="#myCarousel" data-slide-to="15"></li>
                            <li data-target="#myCarousel" data-slide-to="16"></li>
                            <li data-target="#myCarousel" data-slide-to="17"></li>
                            <li data-target="#myCarousel" data-slide-to="18"></li>
                            <li data-target="#myCarousel" data-slide-to="19"></li>
                            <li data-target="#myCarousel" data-slide-to="20"></li>
                            <li data-target="#myCarousel" data-slide-to="21"></li>
                            <li data-target="#myCarousel" data-slide-to="22"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('assets/img/logo-grupo.png') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_21.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_22.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_23.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_1.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_3.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_4.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_5.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_6.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_7.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_8.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_9.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_10.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_11.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_12.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_13.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_14.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_15.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_16.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_17.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_18.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_19.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/foto_20.jpg') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left text-grey"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right text-grey"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection