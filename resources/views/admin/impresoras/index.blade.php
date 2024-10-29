@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h1>Inventario de Impresoras</h1>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <a href="{{ route('impresoras.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Agregar Impresora</a>
                    </div>
                    <div class="card-body">
                    <!-- Tabla de toners -->
                    <table id="example" class="table table-striped nowrap" style="width:100%" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Nro de Orden</th>
                                    <th>Ubicacion</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($impresoras as $impresora)
                                <tr>
                                    <td>{{$impresora->descripcion}}</td>
                                    <td>{{ $impresora->modelos ? $impresora->modelos->nombre : 'N/A' }}</td>
                                    <td>{{ $impresora->modelos ? $impresora->modelos->nombre : 'N/A' }}</td>
                                    <td>{{$impresora->orden}}</td>
                                    <td>{{$impresora->ubicacion ? $impresora->ubicacion : 'N/A' }}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-warning rounded-circle" title="Editar"><i class="fa fa-pencil" style="display:inline"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-danger rounded-circle" title="Eliminar" onclick="return confirm('Está seguro de eliminar el modelo de toner?')"><i class="fa fa-trash style=" display:inline></i></button>
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