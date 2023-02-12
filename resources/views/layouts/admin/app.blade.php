<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
        <link rel="stylesheet" href="{{asset('adm/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('adm/css/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('adm/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('adm/css/tooplate.css')}}">

    </head>
    <body>

        @yield('content')

        {{--    --}}
        <script src="{{asset('adm/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('adm/js/moment.min.js')}}"></script>
        <script src="{{asset('adm/js/utils.js')}}"></script>
        <script src="{{asset('adm/js/Chart.min.js')}}"></script>
        <script src="{{asset('adm/js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('adm/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('adm/js/tooplate-scripts.js')}}"></script>
        <script>
            let ctxLine,
                ctxBar,
                ctxPie,
                optionsLine,
                optionsBar,
                optionsPie,
                configLine,
                configBar,
                configPie,
                lineChart;
            barChart, pieChart;
            // DOM is ready
            $(function () {
                updateChartOptions();
                drawLineChart(); // Line Chart
                drawBarChart(); // Bar Chart
                drawPieChart(); // Pie Chart
                drawCalendar(); // Calendar

                $(window).resize(function () {
                    updateChartOptions();
                    updateLineChart();
                    updateBarChart();
                    reloadPage();
                });
            })
        </script>
    </body>
</html>
