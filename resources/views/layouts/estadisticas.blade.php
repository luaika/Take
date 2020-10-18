@extends('layouts.app')
@section('content')

<html>
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawAxisTickColors);

    function drawAxisTickColors() {
          var data = google.visualization.arrayToDataTable([
            ['Opciones de calificación', 'SI', 'NO'],
            ['Exceso de velocidad', {{$exceso_de_velocidadTrue}} , {{$exceso_de_velocidadFalse}}],
            ['Habla por celular', {{$habla_por_celularTrue}}, {{$habla_por_celularFalse}}],
            ['Tanquea con pasajeros', {{$tanquea_con_pasajerosTrue}}, {{$tanquea_con_pasajerosFalse}}],
            ['Omite señales', {{$omite_señalesTrue}}, {{$omite_señalesFalse}}],
            ['Conduce brusco', {{$conduce_bruscoTrue}}, {{$conduce_bruscoFalse}}],
            ['Trato amable cordial', {{$trato_amable_cordialTrue}}, {{$trato_amable_cordialFalse}}],
            ['Conduce con prudencia', {{$conduce_con_prudenciaTrue}}, {{$conduce_con_prudenciaFalse}}],
            ['Respeta las señales', {{$respeta_las_señalesTrue}}, {{$respeta_las_señalesFalse}}],
            ['Vehiculo limpio', {{$vehiculo_limpioTrue}}, {{$vehiculo_limpioFalse}}],
            ['Viaje agradable limpio y seguro', {{$viaje_agradable_limpio_SeguroTrue}}, {{$viaje_agradable_limpio_SeguroFalse}}]
          ]);

          var options = {
        title: 'GRAFICO - REPORTE DE CALIFICACIÓN DEL SERVICIO',
        chartArea: {width: '50%'},

        hAxis: {
          title: 'Número de registros',
          minValue: 0,
          textStyle: {
            bold: true,
            fontSize: 12,
            color: '#4d4d4d',
            minValue: 0,
            maxValue: 100
          },
          titleTextStyle: {
            bold: true,
            fontSize: 18,
            color: '#4d4d4d'
          }
        },

        vAxis: {
          title: 'Opciones de calificación',
          textStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484',

          },
          titleTextStyle: {
            fontSize: 14,
            bold: true,
            color: '#848484'
          }
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

    </script>
        </head>
        <body>
            <div class="container" id="chart_div" style="width: 800px; height: 600px; padding: 25px 10px; " ></div>
        </body>
</html>
@endsection

