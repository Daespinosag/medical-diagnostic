@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">List Level</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.level.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="New Level">New</a>
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
                    <td>Name</td>
                    <td>Formula</td>
                    <td>Response</td>
                    <td>Gender</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($levels as $level)
                    <tr class="">
                        <td>{{$level->id}}</td>
                        <td>{{$level->diagnosis->name }}</td>
                        <td>{{$level->name }}</td>
                        <td>{{$level->formula}}</td>
                        <td>{{$level->response}}</td>
                        @if($level->gender == 'F')
                            <td><img src="{{ asset('assets/img/female-gender-symbol.png') }}" alt=""></td>
                        @else
                            <td><img src="{{ asset('assets/img/male-gender-symbol.png') }}" alt=""></td>
                        @endif
                        <td>
                            {{ Form::open(['route'=> ['admin.level.destroy', $level->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.level.show',$level->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Show {{$level->formula}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.level.edit',$level->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Edit {{$level->formula}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Delete {{$level->formula}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $levels->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
