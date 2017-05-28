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
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Posgrado</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
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
                                    <header>Curso Posgrado 1</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-1" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 1</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-2">
                                    <header>Curso Posgrado 2</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-2" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 2</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-3">
                                    <header>Curso Posgrado 3</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-3" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 3</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-4">
                                    <header>Curso Posgrado 4</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion1-4" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 4</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                        </div><!--end .panel-group -->
                    </div><!--end .col -->
                </div><!--end .col -->

            </div>

            <hr class="ruler-xxl"/>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Pregrado</h2>
                </div><!--end .col -->
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
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
                                    <header>Curso Pregrado 1</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-1" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 1</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-2">
                                    <header>Curso Pregrado 2</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-2" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 2</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-3">
                                    <header>Curso Pregrado 3</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-3" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 3</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
                                    </div>
                                </div>
                            </div><!--end .panel -->
                            <div class="card panel">
                                <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-4">
                                    <header>Curso Pregrado 4</header>
                                    <div class="tools">
                                        <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div id="accordion2-4" class="collapse">
                                    <div class="card-body">
                                        <p><strong>Profesor: </strong>Profesor Curso 4</p>
                                        <p><strong>Descripción: </strong>Per at postea mediocritatem, vim numquam aliquid eu, in nam sale gubergren. Fuisset delicatissimi duo, qui ut animal noluisse erroribus. Ea eum veniam audire. Dicant vituperata consequuntur.</p>
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