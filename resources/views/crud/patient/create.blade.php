@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.patients.title.create') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a id="modalButton" href="#" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="modal" data-target="#formModal" data-original-title="Buscar paciente">
                    Buscar paciente
                </a>
                {{--<button class="btn btn-default-bright btn-raised" data-toggle="modal" data-target="#formModal">Buscar paciente</button>--}}
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="loader"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="formModalLabel">Búsqueda de pacientes</h4>
                </div>
                <form class="form-horizontal form-validate" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="searchDocument" class="control-label">Documento</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="number" name="searchDocument" id="searchDocument" class="form-control" placeholder="Documento">
                                <span id="searchError" class="help-block">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="patientSearchCancel" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button id="patientSearch" type="button" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('bodyCard')

    <div class="col-lg-8 col-lg-offset-2">
        {!! Form::open(['route'=> 'admin.patient.store','method'=> 'POST', 'class'=> 'form-horizontal form-validate floating-label', 'novalidate'=>'novalidate']) !!}

            @include('forms.patient.patientForm')

            <div class="card-actionbar-row">
                <a href="{{ route('admin.patient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction">{{ trans('global.buttons.cancel') }}</a>
                <button type="submit" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.save') }}</button>
            </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('javascript')

@endsection

