@extends('template.main')

@section('content')


    <div class="col-md-4">
        <div class="card">
                <div class="card-head card-bordered style-primary">
                    <header><i class="fa fa-fw fa-tag"></i>{{ trans('global.patients.title.show') }}</header>
                </div>
            <div class="card-body">
                <div class="">
                    <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" @if($patient->gender == 'F')src="{{ asset('assets/img/avatar_female.png') }}" @else src="{{ asset('assets/img/avatar_male.png') }}" @endif alt="User profile picture">
                    <h4 class="profile-username text-center">{{ $patient->name.' '.$patient->last_name_1.' '.$patient->last_name_2 }}</h4>
                    <p class="text-muted text-center"> </p>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.email')}}</b>
                        <p class="pull-right">{{ $patient->email }}</p>
                    </li>

                    <li class="list-group-item">
                        <b>{{trans('validation.attributes.identification-card')}}</b>
                        <p class="pull-right">{{ $patient->identification_card }}</p>
                    </li>
                    <li class="list-group-item">
                        <b class="">{{trans('validation.attributes.gender')}}</b>
                        <p class="pull-right">@if($patient->gender == 'M') Hombre @else($patient->gender == 'F') Mujer @endif </p>
                    </li>
                    <li class="list-group-item">
                        <b>Actualización</b>
                        <p class="pull-right">{{ $patient->updated_at }}</p>
                    </li>
                    <li class="list-group-item">
                        <div class="tools text-center">
                            <div class="btn-group">
                                <a id="modalSearchCasesButton" href="#" type="button" class="btn btn-raised btn-primary btn-inline ink-reaction" data-toggle="modal"
                                   data-backdrop="static" data-keyboard="false" data-target="#formModal" data-original-title="Generar diagnósticos">
                                    Generar diagnósticos
                                </a>
                                {{--<button class="btn btn-default-bright btn-raised" data-toggle="modal" data-target="#formModal">Buscar paciente</button>--}}
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="card-actionbar-row">
                    <a href="{{ route('admin.patient.index') }}" class="btn btn-raised btn-default btn-inline ink-reaction pull-left">{{ trans('global.buttons.return') }}</a>
                    <a href="{{ route('admin.patient.edit',$patient->id) }}" class="btn btn-raised btn-primary btn-inline ink-reaction">{{ trans('global.buttons.edit') }}</a>
                </div>
            </div>
        </div>
    </div>

    @if(count($arr) > 0)

        @foreach($arr as $case => $diagnosesCase)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-head card-bordered style-primary">
                        <header><i class="fa fa-fw fa-tag"></i>Diagnóstico caso {{ $case }}</header>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td>Diagnóstico</td>
                                <td>Nivel</td>
                                <td>Fecha</td>
                            </tr>
                            </thead>
                            <tbody class="">
                            @foreach($diagnosesCase as $diagnosisCase)
                                <tr class="">
                                    <td>{{ $diagnosisCase['diagnosis_name'] }}</td>
                                    <td>{{ $diagnosisCase['response'] }}</td>
                                    <td>{{ $diagnosisCase['date'] }}</td>
                                </tr>
                            @endforeach
                            <tr class="">
                                <td colspan="3" class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('generatePatientCaseReport', [$patient->id, $case]) }}" target="_blank" type="button" class="btn btn-raised btn-primary btn-inline ink-reaction" data-original-title="Generar diagnósticos">
                                            Generar reporte
                                        </a>
                                        {{--<button class="btn btn-default-bright btn-raised" data-toggle="modal" data-target="#formModal">Buscar paciente</button>--}}
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="loader"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="formModalLabel">Resultado</h4>
                </div>
                <form class="form-horizontal form-validate" role="form">
                    <div class="modal-body">
                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" id="document" name="document" value="{{ $patient->identification_card }}">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="caseNumber" class="control-label">Número de caso</label>
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control" required="" id="caseNumber" name="caseNumber">
                                    <option selected="selected" value="">Seleccione un caso</option>
                                </select>
                                <span id="selectError" class="help-block">
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <ul id="message">
                            </ul>
                        </div>
                        <div class="form-group" style="color: #f44336;">
                            <ul id="error">
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="generateDiagnosisCancel" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button id="generateDiagnosis" type="button" class="btn btn-primary">Generar</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection