@extends('template.main')

@section('content')

    <div class="col-lg-8 col-lg-offset-2">
            <div class="card">
                <div class="card-head card-head-sm style-primary">
                    <header>Show Diagnosis</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div><!--end .card-head -->
                <div class="card-body">
                    <h3>{{ $diagnosis->name }}</h3>
                    <blockquote><small> Type Diagnosis: {{ $diagnosis->typeDiagnosis->name }}</small></blockquote>
                    <blockquote><small>Description: {{ $diagnosis->description }}</small></blockquote>
                </div><!--end .card-body -->
                <div class="card-actionbar-row">
                        <a href="{{ route('admin.diagnosis.index') }}" class="btn btn-raised btn-primary btn-inline ink-reaction">Accept</a>
                </div>
            </div>
    </div>

@endsection