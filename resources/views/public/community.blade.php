@extends('template.main')

@section('title', 'Comunidad')

@section('content')

    <section>
        <div class="section-header">
            <ol class="breadcrumb">
                <li><a href="{{ route('public.community') }}">Comunidad</a></li>
                <li class="active">Blank page</li>
            </ol>
        </div><!--end .section-header -->
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-primary">Comunidad</h1>
                </div><!--end .col -->

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <article class="margin-bottom-xxl">
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor
                        </p>
                    </article>
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://imias.ufrn.br/pages/home" target="_blank">IMIAS</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://imias.ufrn.br/pages/home" target="_blank">
                                <img src="{{ asset('assets/img/logo_imias.png') }}" width="147" height="100"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://imias.ufrn.br/pages/home" target="_blank">IMIAS</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://imias.ufrn.br/pages/home" target="_blank">
                                <img src="{{ asset('assets/img/logo_imias.png') }}" width="147" height="100"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <header><a href="http://imias.ufrn.br/pages/home" target="_blank">IMIAS</a></header>
                        </div><!--end .card-head -->
                        <div class="card-body text-center">
                            <a href="http://imias.ufrn.br/pages/home" target="_blank">
                                <img src="{{ asset('assets/img/logo_imias.png') }}" width="147" height="100"></a>
                            </a>
                        </div><!--end .card-body -->
                    </div><!--end .card -->
                </div><!--end .col -->

            </div>

        </div><!--end .section-body -->
    </section>


@endsection