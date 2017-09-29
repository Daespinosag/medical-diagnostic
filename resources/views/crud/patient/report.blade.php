<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reporte</title>
    {{--<link rel="stylesheet" href="{{ asset('css/pdf-style.css') }}" media="all" />--}}
    <link rel="stylesheet" href="css/pdf-style.css" media="all" />
</head>
<body>
@if(count($arr) > 0)
    @foreach($arr as $case => $diagnosesCase)
        <header class="clearfix">
            <div id="logo">
                {{--<img src="{{ asset('assets/img/logo_clinica.png') }}">--}}
                <img src="assets/img/logo_clinica.png">
            </div>
            <h1>CASO MÉDICO N° {{ $case }}</h1>
            {{--
            <div id="company" class="clearfix">
                <div>Company Name</div>
                <div>455 Foggy Heights,<br /> AZ 85004, US</div>
                <div>(602) 519-0450</div>
                <div><a href="mailto:company@example.com">company@example.com</a></div>
            </div>
            --}}
            <div id="project">
                <div><span>PACIENTE</span> {{ $patient->name.' '.$patient->last_name_1.' '.$patient->last_name_2 }}</div>
                <div><span>DOCUMENTO</span> {{ $patient->identification_card }}</div>
                <div><span>GÉNERO</span> @if($patient->gender == 'M') Masculino @else($patient->gender == 'F') Femenino @endif</div>
                <div><span>FECHA</span> {{ Carbon\Carbon::today()->format('Y-m-d') }}</div>
            </div>
        </header>
        <main>

            <table>
                <thead>
                <tr>
                    <td><strong>Diagnóstico</strong></td>
                    <td><strong>Nivel</strong></td>
                    <td><strong>Fecha</strong></td>
                </tr>
                </thead>
                <tbody>
                @foreach($diagnosesCase as $diagnosisCase)
                    <tr>
                        <td>{{ $diagnosisCase['diagnosis_name'] }}</td>
                        <td>{{ $diagnosisCase['response'] }}</td>
                        <td>{{ $diagnosisCase['date'] }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{--
            <div id="notices">
                <div>NOTICE:</div>
                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
            </div>
            --}}
        </main>
    @endforeach
@endif
<footer>
    Este reporte fue generado automáticamente por el sistema de reglas diagnósticas.
</footer>
</body>
</html>