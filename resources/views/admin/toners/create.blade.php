@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center"> <!-- Texto centrado en el header -->
                        <strong>Agregar Nuevo Toner</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class="form-control-label">Modelo de Toner</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                <input class="form-control">
                            </div>
                            <small class="form-text text-muted">Ej. 105A</small>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tipo</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-indent"></i></div>
                                <select class="form-control"> <!-- Cambié input por select -->
                                    <option value="" disabled selected>Seleccione una opcion</option>
                                    <!-- Placeholder -->
                                    <option value="original">Original</option>
                                    <option value="alternativo">Alternativo</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Fecha de Compra</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="date" class="form-control"> <!-- Cambié el tipo de input a 'date' -->
                            </div>
                            <small class="form-text text-muted">Ej. 25/10/2024</small>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Observaciones</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                <textarea class="form-control" rows="4"
                                    placeholder="Ej. Detalles de la compra"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .animated -->
</div><!-- .content -->
@endsection