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
                    <h2 class="text-primary">Lineas de extensión</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Línea de extensión 1</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Línea de extensión 2</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Línea de extensión 3</div>
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
                    <h2 class="text-primary">Campos de aplicación</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Campo de aplicación 1</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Campo de aplicación 2</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Campo de aplicación 3</div>
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
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body no-padding">
                            <ul class="list">
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Proyecto 1</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Proyecto 2</div>
                                    </a>
                                </li>
                                <li class="tile">
                                    <a class="tile-content ink-reaction">
                                        <div class="tile-text">Proyecto 3</div>
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