@extends('template.main')

@section('title', 'Proyección (Extensión)')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.extension') }}">Proyección (Extensión)</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Proyección (Extensión)</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Proyectos</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion2">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-1">
                                <header><strong>ATENEO DE GERIATRÍA</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-1" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        El énfasis está en la discusión de los casos interesantes y las dificultades para el diagnóstico y tratamiento de los ancianos. Asisten los profesores de la sección de Medicina Interna/Geriatría del departamento Clínico, estudiantes de pregrado de Medicina, Enfermería  y posgrados de Medicina de la Facultad de Ciencias para la Salud de la Universidad de Caldas.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                <header><strong>CLINICA DE INESTABILIDAD, VERTIGO,  CAIDAS  Y  FRACTURAS  EN ANCIANOS</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-2" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        Se pretende atender la población anciana, mayores de 65 años, del eje cafetero, que presenten problemas de inestabilidad, vértigo mareos y caídas o hayan sufrido una fractura por caídas.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-3">
                                <header><strong>VALORACIÓN Y SEGUIMIENTO DE PACIENTES CON FRACTURA DE CADERA POR FRAGILIDAD</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-3" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        Atiende pacientes de 65 años y mayores que consulten al servicio de urgencias de la clínica Instituto del corazón de Manizales-DIACORSAS por una fractura de cadera por fragilidad.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-4">
                                <header><strong>CLÍNICA DE MEMORÍA</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-4" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        Busca identificar la causa del problema de consulta del anciano a partir de una valoración interdisciplinaria que cuenta con las especialidades de neurología, psiquiatría, geriatría, medicina interna y neuropsicología, generando por consenso unas recomendaciones finales acerca del posible diagnóstico, plan de manejo y recomendaciones generales.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-5">
                                <header><strong>CAPACITACIÓN DE MÉDICOS GENERALES</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-5" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        La cualificación de los médicos generales, es orientada desde sesiones magistrales, en ellas se desarrollan temas selectos que complementan la capacitación profesional, entre ellos generalidades y definiciones: introducción, el anciano en el mundo, Latinoamérica.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-6">
                                <header><strong>VALORACION DOMICILIARIA  MULTIDIMENSIONAL</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-6" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        Evaluación multidimensional del anciano, no se limita al interrogatorio y examen físico para llegar a un diagnóstico, sino que la amplía a las tareas funcionales del anciano, las características de la vivienda y del vecindario y a las interacciones del anciano con su familia, convivientes o cuidadores.
                                    </p>
                                </div>
                            </div>
                        </div><!--end .panel -->
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-7">
                                <header><strong>ACOMPAÑAMIENTO PSICOSOCIAL Y EDUCATIVO A ADULTOS MAYORES USUARIOS DEL LABORATORIO DE ENVEJECIMIENTO.  "Todos envejecemos"</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-7" class="collapse">
                                <div class="card-body">
                                    <p>
                                        <strong>Descripción: </strong>
                                        Este proyecto de orientación y acompañamiento psicosocial y educativo a las familias está ligado al interés de la Universidad por dar respuesta a las demandas de atención integral en el entorno, para este caso, específicamente las familias de los adultos mayores que hacen parte de los programas que se desarrollan en el laboratorio de envejecimiento.
                                    </p>
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
                    <div class="panel-group" id="accordion1">
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
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                                <header><strong>Requisitos pasantías en la Universidad de Caldas</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse">
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
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                <header><strong>Requisitos pasantías internacional de estudiantes de la Universidad de Caldas</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-2" class="collapse">
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
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                <header><strong>Contacto</strong></header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-3" class="collapse">
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