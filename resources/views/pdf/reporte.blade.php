<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="body">
    <div class="contenedor">

        <img src="./picture/sev.png" width="100px" height="50px" alt="">
        <img src="./picture/GobiernoVer.png" width="100px" height="50px" alt="">
        <img src="./picture/DET.png" width="100px" height="50px" alt="">

    </div>
    <div>
        <label style="text-align:center">

            <h4>Dirección de Educación Tecnológica del Estado de Veracruz</h4>

            <h4>Reporte General</h4>
        </label>
    </div>
    <table class="tablex" style="text-align:center">
        <thead class="thead">
            <tr class="tr">
                @foreach ($data as $itemDat)
                    <th class="th">{{ $origin[$itemDat] }} </th>
                @endforeach
            </tr>
        </thead>
        @foreach ($insti as $item)
            <tr class="tr">
                @foreach ($data as $datItem)
                    <td class="td">
                        @if ($datItem == '3')
                            {{ $item->Institucion->nombre }}
                        @else
                            {{ $item[$sql[$datItem]] }}
                        @endif
                    </td>
                @endforeach

            </tr>
        @endforeach
    </table>
</body>

<style>
    /*
 Color fondo: #632432;
 Color header: 246355;
 Color borde: 0F362D;
 Color iluminado: 369681;
*/
    .body {
        /*background-color: #632432;*/
        font-family: Arial;
    }

    #main-container {
        margin: 150px auto;
        width: 600px;
    }

    .tablex {
        background-color: white;
        text-align: left;
        border-collapse: collapse;
        width: 100%;
        font-size: 10px
    }

    .th,
    .td {
        padding: 2px;

    }

    .thead {
        background-color: #246355;
        border-bottom: solid 5px #0F362D;
        color: white;
    }

    .tr:nth-child(even) {
        background-color: #ddd;
    }

    .tr:hover .td {
        background-color: #369681;
        color: white;
    }

    .contenedor {
        text-align: center;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        flex-wrap: wrap;

    }

    img {
        padding: 7px;
    }
</style>

</html>
