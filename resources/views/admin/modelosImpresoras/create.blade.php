@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Agregar Nuevo Modelo de Impresora</strong>
                    </div>
                    <div class="card-body card-block">
                        <!-- Aquí comienza el formulario -->
                        <form method="POST" action="{{route('modelosImpresoras.store')}}">
                            @csrf <!-- Token de seguridad para formularios en Laravel -->

                            <!-- Campo Modelo de Tóner -->
                            <div class="form-group">
                                <label class="form-control-label">Nombre</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                    <input type="text" name="nombre" class="form-control" placeholder="Ej. 107A"
                                        required>
                                </div>
                            </div>

                            <!-- Campo Tipo -->
                            <div class="form-group">
                                <label class="form-control-label">Estado</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-indent"></i></div>
                                    <select name="activo" class="form-control" required>
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="1" selected>Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                          

                            <!-- Botón para enviar el formulario -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Tóner</button>
                            </div>
                        </form>
                        <!-- Fin del formulario -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection