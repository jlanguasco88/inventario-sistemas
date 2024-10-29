@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Listado de modelos de Impresoras</h1>
                </div>
                <div class="card-body">
                <a href="{{ route('modelosImpresoras.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Agregar Modelo</a>                          
                </div>
                <div class="card-body">
                    <!-- Tabla de impresoras -->
                    <table id="example" class="table table-striped nowrap" style="width:100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Activo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($modelosImpresoras as $modeloimp)
                        <tr>
                             <td>{{$modeloimp->marca}}</td>  
                             <td>{{$modeloimp->modelo}}</td>  
                             <td><?php if ($modeloimp->activo == 0){
                                            echo 'Inactivo';
                                        } else {
                                            echo 'Activo';
                                        }?></td> 
                             <td>      
                                <a href="{{ route('modelosImpresoras.edit', $modeloimp->id) }}">
                                <button class="btn btn-warning rounded-circle" title="Editar"><i class="fa fa-pencil" style="display:inline"></i></button>
                              </a>
                            </td>
                             <td>
                                <a href="{{ route('modelosImpresoras.destroy', $modeloimp->id) }}">
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