<html>
    <head>
        <link rel="stylesheet" href="{{ asset('public/css/tablas.css') }}">
        <style>
        .table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
    </head>
    <body>
    <h1>Datos Coordinadores</h1>
    <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sede</th>
                            <th>Identificación</th>
                            <th>Codigo</th>
                            <th>Programa</th>
                            <th>Fecha Vinculación</th>
                            <th>Acuerdo De Nombramiento</th>
                            <th>Activo</th>
                            <th>Semillero</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($coordinador as $items)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$items->sede->nombre}}</td>
                                <td>{{$items->persona->identificacion}}</td>
                                <td>{{$items->codigo}}</td>
                                <td>{{$items->programa->nombre}}</td>
                                <td>{{$items->fechavinculacion}}</td>
                                <td>{{$items->acuerdodenombramiento}}</td>
                                <td>{{$items->estaactivo ? 'Activo' : 'Inactivo'}}</td>
                                <td>{{$items->semillero->nombre}}</td>
                                </td>
                            </tr>
                            @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
             </body>
</hmtl>