@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div>
            <div class="card">
                <div class="card-header text-center">
                    <strong>Listado de modelos de toners</strong>
                </div>
                <div class="card-body">
                    <!-- Tabla de impresoras -->
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered with=100%">
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
                             <td>{{$modelo->nombre}}</td>  
                             <td>{{$modelo->activo}}</td> 
                             <td>      
                                <a href="{{ route('modelos.edit', $modelo->id) }}">
                                <button class="btn btn-warning" title="Editar"><i class="fa fa-pencil" style="display:inline"></i></button>
                              </a>
                            </td>
                             <td>
                                <a href="{{ route('modelos.destroy', $modelo->id) }}">
                                <button class="btn btn-danger" title="Eliminar"  onclick="return confirm('Está seguro de eliminar el modelo de toner?')"><i class="fa fa-trash style="display:inline"></i></button>
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