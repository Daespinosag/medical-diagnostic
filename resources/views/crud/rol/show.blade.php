@extends('template.main')

@section('content')

    <div class="col-lg-8 col-lg-offset-2">
            <div class="card">
                <div class="card-head card-head-sm style-primary">
                    <header>Show Rol</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div><!--end .card-head -->
                <div class="card-body">
                    <h3>{{ $rol->name }}</h3>

                    <blockquote><small>{{ $rol->description }}</small></blockquote>
                </div><!--end .card-body -->
                <div class="card-actionbar-row">
                        <a href="{{ route('admin.rol.index') }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Accept</a>
                </div>
            </div>
    </div>

@endsection