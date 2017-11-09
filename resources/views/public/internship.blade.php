@extends('template.main')

@section('title', 'Pasantías')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.internship') }}">Pasantías</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Pasantías</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Internacionales</h2>
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
                                    <header>Universidad federal del rio grande del norte</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-1" class="collapse">
                                    <div class="card-body">
                                        <strong>Lugar: </strong>Brasil
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                    <header>Residencia para adultos mayores. Cala Estancia. Palma de Mallorca.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-2" class="collapse">
                                    <div class="card-body">
                                        <strong>Lugar: </strong>España
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                    <header>Residencia LLAR D´ ANCIANS.  Palma de Mallorca.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-3" class="collapse">
                                    <div class="card-body">
                                        <strong>Lugar: </strong>España
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
                    <h2 class="text-primary">Nacionales</h2>
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
                                    <header>IPS Integrar Salud.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-1" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Lugar: </strong>Cali
                                        </p>
                                        <p>
                                            <strong>Descripción: </strong>Implementación de servicios de orientación a las familias y cuidadores  de los ancianos usuarios de la IPS Integrar salud , dentro del proceso de atención a los usuarios de la IPS.
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                    <header>Ministerio de Salud y Protección Social.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-2" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Lugar: </strong>Bogotá
                                        </p>
                                        <p>
                                            <strong>Descripción: </strong>Participación en la  línea de la proyección del cuidado para la independencia y autonomía del adulto mayor.
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-3">
                                    <header>Fundación Santa Fe de Bogota.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-3" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Lugar: </strong>Bogotá
                                        </p>
                                        <p>
                                            <strong>Descripción: </strong>Profundizar en cuanto a los aspectos clínicos y manejo de entidades neurológicas del adulto mayor aplicados a los procesos de Neurorehabilitacion.
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-4">
                                    <header>Universidad de Cundinamarca.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-4" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Lugar: </strong>Bogotá
                                        </p>
                                        <p>
                                            <strong>Descripción: </strong>Participación en la formulación de la política pública de envejecimiento y vejez del departamento de Cundinamarca.
                                        </p>
                                    </div>
                                </div>
                            </div><!--end .panel --><div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-5">
                                    <header>Secretaria de Salud Departamental del Huila.</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-5" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            <strong>Lugar: </strong>Neiva
                                        </p>
                                        <p>
                                            <strong>Descripción: </strong>Apoyo en la formulación e implementación de programas del adulto mayor.
                                        </p>
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