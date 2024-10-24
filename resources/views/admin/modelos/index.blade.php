@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Listado de modelos de toners</h1>
                </div>
                <div class="card-body">
                <a href="{{ route('modelos.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Agregar Modelo</a>                          
                </div>
                <div class="card-body">
                    <!-- Tabla de impresoras -->
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Activo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($modelos as $modelo)
                        <tr>
                             <td>{{$modelo->descripcion}}</td>  
                             <td><?php if ($modelo->activo == 0){
                                            echo 'Inactivo';
                                        } else {
                                            echo 'Activo';
                                        }?></td> 
                             <td>      
                                <a href="{{ route('modelos.edit', $modelo->id) }}">
                                <button class="btn btn-warning rounded-circle" title="Editar"><i class="fa fa-pencil" style="display:inline"></i></button>
                              </a>
                            </td>
                             <td>
                                <a href="{{ route('modelos.destroy', $modelo->id) }}">
                                <button class="btn btn-danger rounded-circle" title="Eliminar"  onclick="return confirm('Está seguro de eliminar el modelo de toner?')"><i class="fa fa-trash style="display:inline"></i></button>
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