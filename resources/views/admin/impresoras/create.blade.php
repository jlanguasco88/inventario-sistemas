@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center"> <!-- Texto centrado en el header -->
                        <strong>Agregar Nueva Impresora</strong>
                    </div>
                    <div class="card-body card-block">
                        <!-- Aquí comienza el formulario -->
                        <form method="POST" action="">
                            @csrf <!-- Token de seguridad de Laravel -->

                            <!-- Campo ID (opcional) -->
                            <div class="form-group">
                                <label class="form-control-label">ID de la Impresora (Autogenerado)</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-id-badge"></i></div>
                                    <input type="text" name="id" class="form-control" placeholder="ID autogenerado" readonly>
                                </div>
                                <small class="form-text text-muted">Este campo se autogenera.</small>
                            </div>

                            <!-- Campo Modelo de Impresora -->
                            <div class="form-group">
                                <label class="form-control-label">Modelo de Impresora</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                    <input type="text" name="modelo_impresora" class="form-control" placeholder="Ej. HP107a" required>
                                </div>

                            </div>

                            <!-- Campo Tipo -->
                            <div class="form-group">
                                <label class="form-control-label">Tipo</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-indent"></i></div>
                                    <select name="tipo" class="form-control" required>
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="multifuncion">Multifuncion</option>
                                        <option value="blanco_y_negro">Blanco y negro</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Campo Fecha de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Fecha de Compra</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="date" name="fecha_compra" class="form-control" required>
                                </div>
                                
                            </div>

                            <!-- Campo Observaciones -->
                            <div class="form-group">
                                <label class="form-control-label">Observaciones</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                    <textarea name="observaciones" class="form-control" rows="4" placeholder="Ej. Detalles de la compra"></textarea>
                                </div>
                            </div>

                            <!-- Botón para enviar el formulario -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Impresora</button>
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