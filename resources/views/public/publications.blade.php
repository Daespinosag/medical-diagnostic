@extends('template.main')

@section('title', 'Publicaciones científicas')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.publications') }}">Publicaciones científicas</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Publicaciones científicas</h1>
                </div><!--end .col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Atículos en revista</h2>
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
                                <header>Año 2015</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 1</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 2</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 3</div>
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
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                <header>Año 2016</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-2" class="collapse">
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body no-padding">
                                                <ul class="list">
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 1</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 2</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 3</div>
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

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Memorias en evento</h2>
                </div><!--end .col -->
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
                                <header>Año 2014</header>
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
                                                            <div class="tile-text">Articulo 1</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 2</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 3</div>
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
                                <header>Año 2015</header>
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
                                                            <div class="tile-text">Articulo 1</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 2</div>
                                                        </a>
                                                    </li>
                                                    <li class="tile">
                                                        <a class="tile-content ink-reaction">
                                                            <div class="tile-text">Articulo 3</div>
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

        </div><!--end .section-body -->
    </section>


@endsection