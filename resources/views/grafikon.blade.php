<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/canvasjs.min.js')}}"></script>
    <script src="{{asset('js/myJS/boje.js')}}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light",
                title: {
                    text: ""
                },
                axisY: {
                    scaleBreaks: {
                        autoCalculate: true
                    }
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($podaci, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>


</head>
<body>
<div id="app">
    @include('default.navbar')

    <section id="g" class="container">

            <div class="grafikon" id="chartContainer" style="height: 550px; width: 100%;"></div>

    </section>


</div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</html>