@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Patient Level</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.patientLevel.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Criterion">New</a>
            </div>
        </div>
    </div>
@endsection

@section('bodyCard')

    <div id="role">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Diagnosis</td>
                    <td>Patient</td>
                    <td>Diagnosis Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($patientLevels as $patientLevel)
                    <tr class="">
                        <td>{{$patientLevel->id}}</td>
                        <td>{{$patientLevel->level->diagnosis->name }}</td>
                        <td>{{ $patientLevel->patient->name.' '. $patientLevel->patient->last_name_1.' '.$patientLevel->patient->last_name_2 }} </td>
                        <td>{{$patientLevel->diagnosis_date}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.patientLevel.destroy', $patientLevel->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.patientLevel.show',$patientLevel->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$patientLevel->id}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.patientLevel.edit',$patientLevel->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$patientLevel->id}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$patientLevel->id}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $patientLevels->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
