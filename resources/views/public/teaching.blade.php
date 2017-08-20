@extends('template.main')

@section('title', 'Docencia')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.teaching') }}">Docencia</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Docencia</h1>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <p>
                        El grupo de investigación participa de la oferta de formación del talento humano en las diferentes titulaciones que otorga
                        la Universidad de Caldas a través de los programas profesionales (Pregrado) y posgrado (especialización médica,
                        maestría y doctorado).
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Pregrado</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    {{--<article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>--}}
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
                                    <header><strong>Medicina:</strong> Geriatría clínica – terapéutica en medicina interna.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-1" class="collapse">
                                    <div class="card-body">
                                        <a href="http://acad.ucaldas.edu.co/gestionacademica/planestudios/pensumver.asp?cod_carrera=052" target="_blank">Más información</a>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                    <header><strong>Enfermería:</strong> Cuidado del adulto mayor.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-2" class="collapse">
                                    <div class="card-body">
                                        <a href="http://acad.ucaldas.edu.co/gestionacademica/planestudios/pensumver.asp?cod=414&cod_carrera=024" target="_blank">Más información</a>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                    <header><strong>Educación física, recreación y deporte:</strong> Profundización en actividad física para la promoción de la salud y prevención de la enfermedad.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-3" class="collapse">
                                    <div class="card-body">
                                        <a href="http://acad.ucaldas.edu.co/piaas/Default2.aspx?cod_materia=G9I0185&tipo=1" target="_blank">Más información</a>
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
                    <h2 class="text-primary">Posgrado</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    {{--<article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>--}}
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
                                    <header><strong>Especialización:</strong> Medicina interna – geriatría.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-1" class="collapse">
                                    <div class="card-body">
                                        <a href="http://www.ucaldas.edu.co/portal/especializacion-en-medicina-interna-geriatria/" target="_blank">Más información</a>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                    <header><strong>Maestría en gerontología: Envejecimiento y Vejez</strong></header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-2" class="collapse">
                                    <div class="card-body">
                                        <a href="http://www.ucaldas.edu.co/portal/maestria-en-gerontologia-envejecimiento-y-vejez/" target="_blank">Más información</a>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                        </div><!--end .panel-group -->
                    </div><!--end .col -->
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection