@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Inventario de Impresoras</strong>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <a href="{{ route('impresoras.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Agregar Impresora</a>
                    </div>
                    <div class="card-body">
                        <!-- Tabla de impresoras -->
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Modelo</th>
                                    <th>Orden</th>
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
                                    <td>{{$impresora->orden}}</td>
                                    <td>{{$impresora->ubicacion ? $impresora->ubicacion : 'N/A' }}</td>
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