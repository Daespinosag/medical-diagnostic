@extends('template.main')

@section('title', 'Investigación')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.research') }}">Investigación</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Investigación</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Lineas de investigación</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="panel-group" id="accordion9">
                        {{--<div class="card panel expanded">
                            <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                                <header>Curso 1</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse in">
                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                </div>
                            </div>
                        </div>--}}<!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion9" data-target="#accordion9-1">
                                    <header><strong>Geriatría clínica</strong></header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion9-1" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Fecha de creación:</strong> 1994
                                        </p>
                                        <p>
                                            <strong>Descripción del objeto de estudio:</strong> La Geriatría Clínica ha sido definida como la rama de la gerontología y la medicina que trata la salud y la enfermedad de las personas de edad avanzada en todos sus aspectos: preventivo, clínico, terapéutico, de rehabilitación y de vigilancia continua.
                                        </p>
                                        <p>
                                            <strong>Áreas problemáticas:</strong>
                                            <ul>
                                                <li>Osteoporosis.</li>
                                                <li>Accidente  Cerebro Vascular.</li>
                                                <li>Desórdenes Iatrogénicos.</li>
                                                <li>Síndromes metabólicos.</li>
                                                <li>Salud Mental.</li>
                                                <li>Incontinencia.</li>
                                                <li>Hipertensión arterial.</li>
                                                <li>Úlceras por presión.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion9" data-target="#accordion9-2">
                                    <header><strong>Mareo, inestabilidad, vértigo, caídas y fracturas</strong></header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion9-2" class="collapse">
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion9" data-target="#accordion9-3">
                                    <header><strong>Capacidad funcional y actividad física</strong></header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion9-3" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Fecha de creación:</strong> 1997
                                        </p>
                                        <p>
                                            <strong>Descripción del objeto de estudio:</strong> Dentro de este contexto, la capacidad funcional al igual que la salud, es un proceso individual, aunque determinado por las normas y costumbres del grupo al cual se pertenece, es cambiante y se define como la posibilidad de actuar con autonomía, entendida como la posibilidad de decidir, asumir las consecuencias de las decisiones, confrontarlas con lo esperado y deseado para poder continuar o hacer transformaciones, lo cual determina la autoafirmación y a su vez, la calidad de vida del individuo. Pero esta autonomía necesita un soporte de independencia, entendida como la capacidad de realizar tareas y asumir roles sociales en la cotidianeidad, en un amplio rango de complejidad, sin necesidad de dirección, supervisión o asistencia, por tanto se constituye en una dimensión física.
                                        </p>
                                        <p>
                                            <strong>Áreas problemáticas:</strong>
                                            <ul>
                                                <li>Discapacidad y limitación funcional.</li>
                                                <li>Caídas y sus consecuencias.</li>
                                                <li>Actividad física y ejercicio físico.</li>
                                                <li>Deterioro sensorial.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion9" data-target="#accordion9-4">
                                    <header><strong>Envejecimiento y vejez</strong></header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion9-4" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Fecha de creación:</strong> 2003
                                        </p>
                                        <p>
                                            <strong>Descripción del objeto de estudio:</strong> La gerontología,  hace referencia a la vejez y los procesos de envejecimiento. Se debe reconocer  que su origen tiene que estar ligado al del hombre mismo, tanto con sus creencias acerca de la salud y las doctrinas religiosas, así como con las fuerzas económicas y sociales presentes en ese momento y las manifestaciones artísticas propias de cada cultura.
                                        </p>
                                        <p>
                                            <strong>Áreas problemáticas:</strong>
                                            <ul>
                                                <li>Capacitación, educación e información.</li>
                                                <li>Atención en salud.</li>
                                                <li>Arte y vejez.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <!--end .panel -->
                        </div><!--end .panel-group -->
                    </div><!--end .col -->
                </div><!--end .col -->
            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Campos de aplicación</h2>
                </div><!--end .col -->
                {{--<div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->--}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Cuidado a la salud de las poblaciones humanas</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Cuidado a la salud de las personas</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Desarrollo rural</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Educación</div>
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
                    <h2 class="text-primary">Proyectos</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion1">
                    {{--<div class="card panel expanded">
                        <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                            <header>Curso 1</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion1-1" class="collapse in">
                            <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                            </div>
                        </div>
                    </div>--}}<!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                                <header><strong>Línea:</strong> Geriatría clínica</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Líder:</strong> José Fernando Gómez Montes
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion2">
                                        {{--<div class="card panel expanded">
                                            <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                <header>Curso 1</header>
                                                <div class="tools">
                                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                </div>
                                            </div>
                                            <div id="accordion2-1" class="collapse in">
                                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                                </div>
                                            </div>
                                        </div>--}}<!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                    <header><strong>Proyectos en ejecución 2015-2016</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion2-1" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Metabolic Syndrome and Inflammation on Cognitive Function: gender differences in community dwelling older adults from Canada, Colombia, Brazil and Albania
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Frecuencia de confinamiento y condiciones nutricionales, funcionales y de comorbilidades asociadas, en pacientes egresados de la Unidad de Cuidado Intensivo-UCI
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                                    <header><strong>Proyectos terminados 2012-2015</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion2-2" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Situaciones adversas en la infancia y condiciones crónicas al envejecer: el papel de los marcadores inflamatorios (IL-6, PCR)
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Violencia y cortisol en el anciano
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Dynapenia and sarcopenia as a risk factor for disability in elderly people
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                <header><strong>Línea:</strong> Mareo, inestabilidad, vértigo y caídas</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-2" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Líder:</strong> José Fernando Gómez Montes
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion3">
                                        {{--<div class="card panel expanded">
                                            <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                <header>Curso 1</header>
                                                <div class="tools">
                                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                </div>
                                            </div>
                                            <div id="accordion2-1" class="collapse in">
                                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                                </div>
                                            </div>
                                        </div>--}}<!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#accordion3-1">
                                                    <header><strong>Proyectos en ejecución 2015-2016</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion3-1" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Efecto sobre el miedo a caer y la funcionalidad de tres programas de intervención, en ancianos de la ciudad de Manizales
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Espacio de vida en ancianos con temor a caer y deterioro cognoscitivo de la ciudad de Manizales. IMIAS
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Atención, valoración y seguimiento de pacientes con fractura de cadera por fragilidad.
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#accordion3-2">
                                                    <header><strong>Proyectos terminados 2012-2015</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion3-2" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Movilidad en ancianos de la comunidad de San Lorenzo, Riosucio, Caldas
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                <header><strong>Línea:</strong> Capacidad funcional y actividad física</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-3" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Líder:</strong> Carmen Lucía Curcio Borrero
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion4">
                                        {{--<div class="card panel expanded">
                                            <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                <header>Curso 1</header>
                                                <div class="tools">
                                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                </div>
                                            </div>
                                            <div id="accordion2-1" class="collapse in">
                                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                                </div>
                                            </div>
                                        </div>--}}<!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#accordion4-1">
                                                    <header><strong>Proyectos en ejecución 2015-2016</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion4-1" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Diferencias de genero en movilidad: que se puede aprender para mejorar la movilidad al envejecer?
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#accordion4-2">
                                                    <header><strong>Proyectos terminados 2012-2015</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion4-2" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Entorno físico y social del vecindario y su relación con la movilidad en personas mayores de 60 años en la ciudad de Manizales.
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Nivel de actividad física y espacio de vida en los ancianos de 65 a 74 años del área urbana de Manizales – Colombia
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                    <p>
                                        <strong>Líder:</strong> Eder Peña Quimbaya
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion5">
                                        {{--<div class="card panel expanded">
                                            <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                <header>Curso 1</header>
                                                <div class="tools">
                                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                </div>
                                            </div>
                                            <div id="accordion2-1" class="collapse in">
                                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                                </div>
                                            </div>
                                        </div>--}}<!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#accordion5-1">
                                                    <header><strong>Proyectos en ejecución 2015-2016</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion5-1" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Diseño y validación de dispositivos electrónicos E-SPPB para la evaluación de la capacidad funcional en adultos mayores del Departamento de Caldas. Contrato 771 – 2016 Proyecto 112774455758 COLCIENCIAS – UNIVERSIDAD NACIONAL DE COLOMBIA – UNIVERSIDAD DE CALDAS
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-4">
                                <header><strong>Línea:</strong> Envejecimiento y vejez</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-4" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Líder:</strong> Carmen Lucía Curcio Borrero
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion6">
                                        {{--<div class="card panel expanded">
                                            <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                                <header>Curso 1</header>
                                                <div class="tools">
                                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                </div>
                                            </div>
                                            <div id="accordion2-1" class="collapse in">
                                                <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                                </div>
                                            </div>
                                        </div>--}}<!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion6" data-target="#accordion6-1">
                                                    <header><strong>Proyectos en ejecución 2015-2016</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion6-1" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Envejecer bien: un estudio sobre el envejecimiento exitoso y sus determinantes
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Calidad de vida en ancianos indígenas
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Resiliencia y condiciones previas adversas en la infancia en personas mayores participantes en el estudio IMIAS de Manizales
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Conocimientos, actitudes y prácticas de cuidadores en centros de protección del adulto mayor en caldas
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                            <div class="card panel">
                                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion6" data-target="#accordion6-2">
                                                    <header><strong>Proyectos terminados 2012-2015</strong></header>
                                                    <div class="tools">
                                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                                    </div>
                                                </div>
                                                <div id="accordion6-2" class="collapse">
                                                    <div class="card-body">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body no-padding">
                                                                    <ul class="list">
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Autopercepción de salud en personas mayores de 4 municipios de Caldas (Chinchiná, Dorada, Salamina y Riosucio)
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Trayectoria de vida de los adultos mayores dentro de la comuna San José y los procesos de transformación urbano-social de la ciudad de Manizales.
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Un hábitat para todos: una aproximación a la sociología del habitar desde los viejos en situación de discapacidad de la movilidad de La Comuna San José
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="tile">
                                                                            <a class="tile-content ink-reaction">
                                                                                <div class="tile-text">
                                                                                    Encuesta de Salud Bienestar y Envejecimiento SABE
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!--end .card-body -->
                                                            </div><!--end .card -->
                                                        </div><!--end .col -->
                                                    </div>
                                                </div>
                                            </div><!--end .panel -->
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div><!--end .panel -->
                    </div><!--end .panel-group -->
                </div><!--end .col -->
            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Semilleros de investigación</h2>
                </div><!--end .col -->
                {{--<div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->--}}
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion7">
                    {{--<div class="card panel expanded">
                        <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                            <header>Curso 1</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion2-1" class="collapse in">
                            <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                            </div>
                        </div>
                    </div>--}}<!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-1">
                                <header><strong>Huellas</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion7-1" class="collapse">
                                <div class="card-body">
                                    <p><strong>Creación:</strong> Enero 2005 hasta la fecha</p>
                                    <p><strong>Descipción:</strong> El semillero Huellas  del programa de Gerontología y Geriatría ha consolidado paulatinamente las tres misiones de la Universidad, formación, investigación y proyección a través de actividades realizadas con estudiantes de pregrado y posgrado no solamente del área de la salud, sino de estudiantes de otras facultades tanto de la Universidad de Caldas, como de universidades regionales y nacionales.</p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                    </div><!--end .panel-group -->
                </div><!--end .col -->
            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Pasantía</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion8">
                    {{--<div class="card panel expanded">
                        <div class="card-head" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                            <header>Curso 1</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion2-1" class="collapse in">
                            <div class="card-body"><p>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                            </div>
                        </div>
                    </div>--}}<!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion8" data-target="#accordion8-1">
                                <header><strong>Requisitos pasantías en la Universidad de Caldas</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion8-1" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <a href="http://internacional.ucaldas.edu.co/como.php" target="_blank">
                                            <strong>Más información</strong>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion8" data-target="#accordion8-2">
                                <header><strong>Requisitos pasantías internacional de estudiantes de la Universidad de Caldas</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion8-2" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <a href="http://internacional.ucaldas.edu.co/intercambio.php" target="_blank">
                                            <strong>Más información</strong>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion8" data-target="#accordion8-3">
                                <header><strong>Contacto</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion8-3" class="collapse">
                                <div class="card-body">
                                    <p><strong>Teléfono:</strong> +57 (6) 8783060 Ext. 31261</p>
                                    <p><strong>Correo:</strong> <a href="mailto:geriatria.gerontologia@ucaldas.edu.co" target="_top">geriatria.gerontologia@ucaldas.edu.co</a><br></p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                    </div><!--end .panel-group -->
                </div><!--end .col -->
            </div>

        </div><!--end .section-body -->
    </section>


@endsection