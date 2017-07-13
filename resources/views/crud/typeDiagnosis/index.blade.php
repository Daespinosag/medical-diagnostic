@extends('template.globalCard')

@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Type Diagnosis</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.typeDiagnosis.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Role">New</a>
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
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($typesDiagnosis as $typeDiagnosis)
                    <tr class="">
                        <td>{{$typeDiagnosis->id}}</td>
                        <td>{{$typeDiagnosis->name }}</td>
                        <td>{{$typeDiagnosis->description}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.typeDiagnosis.destroy', $typeDiagnosis->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.typeDiagnosis.show',$typeDiagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$typeDiagnosis->name}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.typeDiagnosis.edit',$typeDiagnosis->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$typeDiagnosis->name}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$typeDiagnosis->name}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $typesDiagnosis->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
