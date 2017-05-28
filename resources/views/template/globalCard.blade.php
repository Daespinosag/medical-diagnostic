@extends('template.main')

@section('content')

    <div class="card card-underline style-default-bright">
        @yield('headerCard')
        <div class="card-body">
            @yield('bodyCard')
        </div>
    </div>

@endsection