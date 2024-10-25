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
                    <!-- Tabla de impresoras -->
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Cantidad disponible</th>
                                <th>Fecha de Compra</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>105a</td>
                                <td>Original</td>
                                <td>25</td>
                                <td>25/07/24</td>
                                <td>Miguel baja el volumen</td>
                                <td><button type="button" class="btn btn-warning btn-sm"><i
                                            class="fa fa-pencil"></i>&nbsp;</button></button></td>
                                <td><button type="button" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i>&nbsp;</button></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>85a</td>
                                <td>Alternativo</td>
                                <td>10</td>
                                <td>25/07/24</td>
                                <td>Miguel baja el volumen</td>
                                <td><button type="button" class="btn btn-warning btn-sm"><i
                                            class="fa fa-pencil"></i>&nbsp;</button></button></td>
                                <td><button type="button" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i>&nbsp;</button></button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection