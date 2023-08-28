<html>
    <head>
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
body
</style>
    </head>
    <body>
        <h2>Datos Semillerista</h2>
    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Identificación</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Semestre</th>
                                <th scope="col">Programa</th>
                                <th scope="col">Semillero</th>
                                <th scope="col">Fecha Vinculación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($semillerista as $items)
                            <tr>
                                <td scope="col">{{$items->persona->nombre}}</td>
                                <td scope="col">{{$items->persona->apellido}}</td>
                                <td scope="col">{{$items->persona->identificacion}}</td>
                                <td scope="col">{{$items->sede->nombre}}</td>
                                <td scope="col">{{$items->semestre}}</td>
                                <td scope="col">{{$items->programa->nombre}}</td>
                                <td scope="col">{{$items->semillero->nombre}}</td>
                                <td scope="col">{{$items->fechavinculacion}}</td>
                                </td>
                            </tr>
                            @php
                                $i = $i +1
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
    </body>
</html>