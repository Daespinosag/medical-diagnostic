@extends('template.main')

@section('title', 'Comunidad')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.community') }}">Comunidad</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Comunidad</h1>
                </div><!--end .col -->

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Alianzas - Locales</h2>
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://umanizales.edu.co" target="_blank">Universidad de Manizales</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://umanizales.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-universidad-de-manizales.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.autonoma.edu.co" target="_blank">Universidad Autónoma de Manizales</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.autonoma.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-universidad-autonoma-de-manizales.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.manizales.unal.edu.co" target="_blank">Universidad Nacional de Colombia - Sede Manizales - Grupo GAIA</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.manizales.unal.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-un-sede-manizales.png') }}"></a>
                            </a>
                            <a href="http://froac.manizales.unal.edu.co/GAIA/" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-gaia.jpg') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.manizales.gov.co" target="_blank">Alcaldía de Manizales</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.manizales.gov.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-alcaldia-manizales.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="https://www.facebook.com/Red-Gerontológica-de-Caldas-190345241328976/" target="_blank">Red Gerontológica de Caldas</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="https://www.facebook.com/Red-Gerontológica-de-Caldas-190345241328976/" target="_blank">
                                <h1>Red Gerontológica de Caldas</h1>
                                {{--<img class="logo" src="{{ asset('assets/img/logo-alcaldia-manizales.png') }}"></a>--}}
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Alianzas - Nacionales</h2>
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://unal.edu.co" target="_blank">Universidad Nacional de Colombia</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://unal.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-un.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.javeriana.edu.co" target="_blank">Universidad Javeriana</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.javeriana.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-universidad-javeriana.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.fsfb.org.co" target="_blank">Fundación Santa Fe de Bogotá</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.fsfb.org.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-fundacion-santafe.svg') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.saldarriagaconcha.org/es/" target="_blank">Fundación Saldarriaga Concha</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.saldarriagaconcha.org/es/" target="_blank">
                                <img class="logo" style="filter: invert(100%);" src="{{ asset('assets/img/logo-fundacion-saldarriaga-concha.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.acgg.org.co/HTML/home_prov.htm" target="_blank">Asociación Colombiana de Gerontología y Geriatría</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.acgg.org.co/HTML/home_prov.htm" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-acgg.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.univalle.edu.co" target="_blank">Universidad del Valle</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.univalle.edu.co" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-universidad-valle.jpg') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Alianzas - Internacionales</h2>
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.imias.ufrn.br" target="_blank">IMIAS</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.imias.ufrn.br" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-imias.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.umontreal.ca" target="_blank">Universite de Montreal</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.umontreal.ca" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-universite-de-montreal.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.queensu.ca" target="_blank">Queen's University</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.queensu.ca" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-queens.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.ufrn.br" target="_blank">Universidade Federal do Rio Grande do Norte</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.ufrn.br" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-ufrn.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="https://sydney.edu.au" target="_blank">University of Sydney</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="https://sydney.edu.au" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-university-of-sydney.svg') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://www.unimelb.edu.au" target="_blank">Unversity of Melbourne</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://www.unimelb.edu.au" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-university-of-melbourne.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://aimss.org.au" target="_blank">Australian Institute for Musculoskeletal Science (AIMSS)</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://aimss.org.au" target="_blank">
                                <img class="logo" src="{{ asset('assets/img/logo-aimss.png') }}"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div>
        </div><!--end .section-body -->
    </section>


@endsection