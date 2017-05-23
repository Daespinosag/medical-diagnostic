@extends('template.main')

@section('title', 'Eventos')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.events') }}">Eventos</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Eventos</h1>
                </div><!--end .col -->

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Nombre</header>
                        </div><!--end .card-head -->
                        <div class="card-body">
                            <p><strong>Deadline: </strong>Fecha.</p>
                            <p><strong>Lugar del evento: </strong>Cuidad - País.</p>
                            <p><strong>Fecha del evento: </strong>Fecha inicio - Fecha fin.</p>
                            <p><strong>Página del evento: </strong><a href="http://www.uao.edu.co/12ccc/" target="_blank">http://www.uao.edu.co/12ccc/</a></p>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Nombre</header>
                        </div><!--end .card-head -->
                        <div class="card-body">
                            <p><strong>Deadline: </strong>Fecha.</p>
                            <p><strong>Lugar del evento: </strong>Cuidad - País.</p>
                            <p><strong>Fecha del evento: </strong>Fecha inicio - Fecha fin.</p>
                            <p><strong>Página del evento: </strong><a href="http://www.uao.edu.co/12ccc/" target="_blank">http://www.uao.edu.co/12ccc/</a></p>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header>Nombre</header>
                        </div><!--end .card-head -->
                        <div class="card-body">
                            <p><strong>Deadline: </strong>Fecha.</p>
                            <p><strong>Lugar del evento: </strong>Cuidad - País.</p>
                            <p><strong>Fecha del evento: </strong>Fecha inicio - Fecha fin.</p>
                            <p><strong>Página del evento: </strong><a href="http://www.uao.edu.co/12ccc/" target="_blank">http://www.uao.edu.co/12ccc/</a></p>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection