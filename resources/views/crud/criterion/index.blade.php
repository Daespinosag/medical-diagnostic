@extends('template.globalCard')


@section('headerCard')
    <div class="card-head">
        <header class="text-primary-dark">{{ trans('global.criterion.title.index') }}</header>

        <div class="tools">
            <div class="btn-group">
                <a href="{{ route('admin.criterion.create') }}" type="button" class="btn btn-raised ink-reaction btn-primary btn-block" data-toggle="tooltip" data-original-title="Nuevo Criterio">{{ trans('global.buttons.new') }}</a>
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
                    <td>{{ trans('validation.attributes.variable') }}</td>
                    <td>{{ trans('validation.attributes.name') }}</td>
                    <td>{{ trans('validation.attributes.formula') }}</td>
                    <td>{{ trans('validation.attributes.value_one') }}</td>
                    <td>{{ trans('validation.attributes.value_two') }}</td>
                    <td>{{ trans('validation.attributes.comparision_operator') }}</td>
                    <td>{{ trans('validation.attributes.unit') }}</td>
                    <td>{{ trans('global.buttons.actions') }}</td>
                </tr>
            </thead>
            <tbody class="">
                @foreach($criteria as $criterion)
                    <tr class="">
                        <td>{{$criterion->id}}</td>
                        <td>{{$criterion->variable->name}}</td>
                        <td>{{$criterion->name}}</td>
                        <td>{{$criterion->level->formula }}</td>
                        <td>{{$criterion->value_1}}</td>
                        <td>{{$criterion->value_2}}</td>
                        <td>{{$criterion->comparison_operator}}</td>
                        <td>{{$criterion->unit}}</td>
                        <td>
                            {{ Form::open(['route'=> ['admin.criterion.destroy', $criterion->id],'method'=> 'DELETE','onsubmit' => 'return confirm("are you sure ?")']) }}
                                <a href="{{ route('admin.criterion.show',$criterion->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Ver {{$criterion->id}}"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.criterion.edit',$criterion->id) }}"  class="btn btn-icon-toggle"  data-toggle="tooltip" data-original-title="Editar {{$criterion->id}}"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-icon-toggle" data-toggle="tooltip" data-original-title="Eliminar {{$criterion->id}}"><i class="fa fa-trash-o"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {!! $criteria->render() !!}
    </div>
@endsection

@section('javascript')

@endsection
