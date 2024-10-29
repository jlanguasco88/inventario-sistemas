@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Agregar Nuevo Tóner</strong>
                    </div>
                    <div class="card-body card-block">
                        <!-- Aquí comienza el formulario -->
                        <form method="POST" action="{{route('toners.store')}}">
                            @csrf <!-- Token de seguridad para formularios en Laravel -->

                            <!-- Campo Modelo de Impresora -->
                            <div class="form-group">
                                <label>Modelo de toner:</label>
                                <select class="form-control input-lg" name="id_modelo" required="">
                                    <option value="">Seleccionar Modelo</option>
                                    @foreach($modelos as $modelo)
                                    <option value="{{$modelo->id}}">{{$modelo->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Campo Stock de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Stock de Compra</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-cubes"></i></div>
                                    <input type="number" name="stock" class="form-control"
                                        placeholder="Ingrese la cantidad de stock" min="1" required>
                                </div>
                            </div>

                            <!-- Campo Fecha de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Fecha de Compra</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="date" name="fecha_compra" class="form-control" required>
                                </div>
                                <small class="form-text text-muted">Ej. 25/10/2024</small>
                            </div>

                            <!-- Campo Observaciones -->
                            <div class="form-group">
                                <label class="form-control-label">Observaciones</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                    <textarea name="observaciones" class="form-control" rows="4"
                                        placeholder="Ej. Detalles de la compra"></textarea>
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