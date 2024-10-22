@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <strong>Inventario de Impresoras</strong>
                </div>
                <div class="card-body">
                    <!-- Tabla de impresoras -->
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Area de Ubicacion</th>
                                <th>Fecha de Compra</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>HP 107a</td>
                                <td>Laser</td>
                                <td>Sistemas</td>
                                <td>25/07/24</td>
                                <td>Miguel baja el volumen</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"><i
                                            class="fa fa-pencil"></i>&nbsp;</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i>&nbsp;</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>HP 108a</td>
                                <td>Lasers</td>
                                <td>Agrimensura</td>
                                <td>26/07/24</td>
                                <td>Miguelasd baja el volumen</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"><i
                                            class="fa fa-pencil"></i>&nbsp;</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i>&nbsp;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

