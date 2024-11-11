@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h1>Inventario de Toners</h1>
                </div>
                <div class="card-body">
                    <!-- Tabla de toners -->
                    <table id="example" class="table table-striped nowrap" style="width:100%" style="text-align:center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Fecha de Compra</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($toners as $toner)
                                <tr>
                                    <td>{{$toner->id}}</td>
                                    <td>{{$toner->modelos ? $toner->modelos->marca ." - ".$toner->modelos->modelo : 'N/A' }}</td>
                                    <td>{{$toner->stock}}</td>
                                    <td>{{$toner->fecha_compra}}</td>
                                    <td>{{$toner->observaciones}}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-warning rounded-circle" title="Editar"><i class="fa fa-pencil" style="display:inline"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-danger rounded-circle" title="Eliminar" onclick="return confirm('Está seguro de eliminar el modelo de toner?')"><i class="fa fa-trash style=" display:inline"></i></button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection