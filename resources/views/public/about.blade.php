@extends('template.main')

@section('title', '¿Quiénes somos?')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.about') }}">¿Quiénes somos?</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">¿Quiénes somos?</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Presentación</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Somos un grupo de investigación adscrito a la Universidad de Caldas, el cual pretende consolidarse como "Escuela" en la
                            gerontología y geriatría en el orden nacional e internacional, con aportes importantes a la teoría de la gerontología y
                            geriatría.
                        </p>
                        <p>
                            El reconocimiento del grupo de investigación en la clasificación "A" COLCIENCIAS, es producto de estar integrado por
                            investigadores calificados en las diferentes líneas de investigación.
                        </p>
                        <p>
                            También procuramos emprender modelos de atención en salud y social al anciano, ajustados a las necesidades
                            particulares de los ancianos del territorio Colombiano.
                        </p>
                        <p>
                            Somos una alternativa de formación Universitaria y de capacitación de los diferentes actores "profesionales de la salud –
                            cuidadores" en gerontología y geriatría.
                        </p>
                    </article>
                </div><!--end .col -->

            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Objetivos</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Promover la investigación en las líneas: 1- Geriatría clínica; 2- Mareo, inestabilidad, vértigo y caídas; 3- Capacidad
                                            funcional y actividad física; 4- Envejecimiento y vejez.
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Fomentar el trabajo académico trans e interdisciplinario mediante procesos y proyectos permanentes de
                                            investigación.
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Difundir los resultados de la investigación tanto a la comunidad científica como al público interesado.
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Fortalecer la formación del talento humano con la oferta de programas académicos de pre y posgrado.
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Fomentar la investigación formativa en los niveles educativos ofertados.
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Fortalecer las actividades de proyección, extensión y servicios de la facultad de Ciencias para la Salud.
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->

            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Integrandes del grupo</h2>
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header class="text-sm">José Fernando Gómez Montes</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2494_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                        <div class="card-body height-3 scroll style-primary">
                            <p>Médico - Especialista en Medicina Interna y Geriatría</p>
                            <p>
                                Líder <br>
                                Grupo de investigación Gerontología y Geriatría
                            </p>
                            <p>
                                <strong>Docente</strong><br>
                                Posgrado: <br>
                                Especialización en Medicina Interna y Geriatría. <br>
                                Maestría en Gerontología: Envejecimiento y Vejez. <br><br>
                                Programa de Pregrado: <br>
                                Medicina.
                            </p>
                            <p>
                                <strong>Contacto</strong><br>

                                Departamento Clínico<br>
                                Facultad de Ciencias para la Salud<br>
                                Universidad de Caldas<br>
                                Edificio Miguel Arango Soto<br>
                                Carrera 25 N 48-57<br>
                                Tels: 057 6 8783061 8783064 8783066 ext. 31153<br>
                                Correo: <a href="mailto:gomez.montes@ucaldas.edu.co" target="_top">gomez.montes@ucaldas.edu.co</a><br>
                                Manizales, Colombia<br>

                            </p>
                        </div>
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Carmen Lucía Curcio Borrero</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/clc.jpg') }}"></a>
                        </div><!--end .card-body -->
                        <div class="card-body height-3 scroll style-primary">
                            <p>Terapeuta Ocupacional - Ph.D. Gerontology</p>
                            <p>Coordinadora de la Maestría en Gerontología: Envejecimiento y vejez</p>
                            <p>
                                <strong>Docente</strong><br>
                                Posgrado: <br>
                                Especialización en Medicina Interna y Geriatría<br>
                                Maestría en Gerontología: Envejecimiento y Vejez<br><br>
                                Programa de Pregrado: <br>
                                Medicina.
                            </p>
                            <p>
                                <strong>Contacto</strong><br>

                                Departamento Clínico<br>
                                Facultad de Ciencias para la Salud<br>
                                Universidad de Caldas<br>
                                Edificio Miguel Arango Soto<br>
                                Carrera 25 N 48-57<br>
                                Tels: 057 6 8783061 8783064 8783066 ext. 31153<br>
                                Correo: <a href="mailto:carmen.curcio@ucaldas.edu.co" target="_top">carmen.curcio@ucaldas.edu.co</a><br>
                                Manizales, Colombia<br>

                            </p>
                        </div>
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Angela María Benjumea Salgado</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Guadalupe María Henao</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Eder Peña Quimbaya</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Ricardo Díaz Cabezas</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Alejandro Pineda Isaza</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Maria Victoria Jurado Vargas</header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <img class="member" src="{{ asset('assets/img/DSC01256.JPG') }}"></a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
            </div>

        </div><!--end .section-body -->
    </section>


@endsection