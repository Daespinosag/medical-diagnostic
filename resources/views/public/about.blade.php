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
                                <header class="text-sm">José Fernando Gómez Montes - <em class="text-xs">Coordinador del grupo</em></header>
                            </div><!--end .card-head -->
                            <div class="card-body text-center">
                                <img class="member" src="{{ asset('assets/img/IMG_2494_1.JPG') }}"></a>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                <div class="col-md-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Carmen Lucía Curcio Borrero</header>
                            </div><!--end .card-head -->
                            <div class="card-body text-center">
                                <img class="member" src="{{ asset('assets/img/IMG_2508_1.JPG') }}"></a>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                <div class="col-md-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Angela Maria Benjumea Salgado</header>
                            </div><!--end .card-head -->
                            <div class="card-body text-center">
                                <img class="member" src="{{ asset('assets/img/IMG_2526_1.JPG') }}"></a>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Martha Cecilia Bernal Escobar
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Angela María Botero Botero - <em>Integrante</em>
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Eliana Alexandra Cartagena Molina
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Edgar Eduardo Castro Osorio
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Walter Arturo Cañas Trejos
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            José Arnoby Chacón Cardona
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Claudia Lorena Cifuentes Marin
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Ricardo Díaz Cabezas
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Alexandra Giraldo Osorio
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Francisco Alejandro González López
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Germán Mauricio Guevara Farfán
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Luisa Fernanda Gutierrez Alzate
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Jennifer Jaramillo Losada - <em>Integrante</em>
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Maria Victoria Jurado Vargas
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Felipe Marulanda Mejía
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Catalina Morales Montero
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Diana Carolina Morales Benavides
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Sandra Lorena Muñoz Herrera
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Jose Mauricio Ocampo Chaparro
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            David Andrés Ocampo Ramírez
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            José Luis Osorio Guzmán
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Eder Peña Quimbaya
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Alejandro Pineda Isaza
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Giovana Marcella Rosas Estrada
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Viviana Rosso Henao
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Francisco Javier Tamayo Giraldo
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Sandra Yaneth Valencia González
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Rodolfo Valencia Sepúlveda
                                        </div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">
                                            Álvaro Andrés Álvarez Rincón
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection