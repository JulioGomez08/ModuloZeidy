@extends('secciones.master')


@section('content')
    <div style="width: 70%; height: 40%;">
        <canvas id="myChart"></canvas>
    </div>
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var promedio = @JSON($datos);
        var nombres = @JSON($nombres);
        console.log(nombres);
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            title: 'Datos',
            type: 'bar',
            data: {
                //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                labels: nombres,
                datasets: [{
                    label: '# of Votes',
                    //data: [12, 19, 3, 5, 2, 3],
                    data: promedio,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <script>
        var promedio = @JSON($datos);
        var nombres = @JSON($nombres);
        console.log(nombres);
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            title: 'Datos',
            type: 'line',
            data: {
                //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                labels: nombres,
                datasets: [{
                    label: '# of Votes',
                    //data: [12, 19, 3, 5, 2, 3],
                    data: promedio,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
