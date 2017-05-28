@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">Diagnostics List</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.diagnosis.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Diagnosis">New</a>
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
                    <td>Type Diagnosis</td>
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($diagnostics as $diagnosis)
                    <tr class="">
                        <td>{{$diagnosis->id}}</td>
                        <td>{{$diagnosis->name }}</td>
                        <td>{{$diagnosis->typeDiagnosis->name }}</td>
                        <td>{{$diagnosis->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.diagnosis.destroy', $diagnosis->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.diagnosis.show',$diagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$diagnosis->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.diagnosis.edit',$diagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$diagnosis->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$diagnosis->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $diagnostics->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
