@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Paient</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.patient.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Role">New</a>
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
                    <td>Name</td>
                    <td>Last Name One</td>
                    <td>Last Name Two</td>
                    <td>Email</td>
                    <td>Identification Card</td>
                    <td>Gender</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($patients as $patient)
                    <tr class="">
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->name }}</td>
                        <td>{{$patient->last_name_1}}</td>
                        <td>{{$patient->last_name_2}}</td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->identification_card}}</td>
                        @if($patient->gender == 'M')
                            <td> {{$patient->gender}}</td>
                        @elseif($patient->gender == 'F')
                            <td> {{$patient->gender}}</td>
                        @else
                            <td> {{$patient->gender}}</td>
                        @endif
                        <td>
                            {{ Form::open(['route'=> ['admin.patient.destroy', $patient->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.patient.show',$patient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$patient->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.patient.edit',$patient->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$patient->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$patient->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $patients->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
