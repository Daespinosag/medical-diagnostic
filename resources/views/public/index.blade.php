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
                    <h2 class="text-primary">Clínica de inestabilidad vértigo, caídas y fracturas</h2>
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
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('assets/img/IMG_2458_1.JPG') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/img/IMG_2452.JPG') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/img/IMG_2499_1.JPG') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/img/IMG_2503_1.JPG') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/img/IMG_2515.JPG') }}" alt="Clínica de caídas">
                                <div class="carousel-caption">
                                    {{--<p>Clínica de caídas</p>--}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('assets/img/IMG_2579.JPG') }}" alt="Clínica de caídas">
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