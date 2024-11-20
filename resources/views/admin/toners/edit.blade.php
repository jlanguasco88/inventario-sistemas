@extends('layouts.plantilla')

@section('contenido')
<div class="content mt-3">
    <div class="grupo">
        <div class="row justify-content-center"> <!-- Cambié 'content-center' por 'justify-content-center' -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- Asegúrate de que la columna ocupe el espacio adecuado en diferentes tamaños de pantalla -->
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Editar Compra</strong>
                    </div>
                    <div class="card-body card-block">
                        <!-- Aquí comienza el formulario -->
                        <form method="POST" action="{{ route('toners.update', $toners->id) }}">
                            @csrf
                            @method('PUT') <!-- Indicar que el formulario debe enviarse con el método PUT -->

                            <!-- Campo Modelo de Impresora -->
                            <div class="form-group">
                                <label class="form-control-label">Modelo de Toner</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-print"></i></div>
                                    <select class="form-control input-lg" name="id_modelo" required>
                                        <option value="">Seleccionar Modelo</option>
                                        @foreach($modelos as $modelo)
                                            <option value="{{ $modelo->id }}" 
                                                @if($modelo->id == $toners->id_modelo) selected @endif>
                                                {{ $modelo->marca . " - " . $modelo->modelo }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Campo Stock de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Stock de Compra</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-cubes"></i></div>
                                    <input type="number" name="stock" class="form-control"
                                        placeholder="Ingrese la cantidad de stock" min="1" value="{{ old('stock', $toners->stock) }}" required>
                                </div>
                            </div>

                            <!-- Campo Fecha de Compra -->
                            <div class="form-group">
                                <label class="form-control-label">Fecha de Compra</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="date" name="fecha_compra" class="form-control" value="{{ old('fecha_compra', $toners->fecha_compra->format('Y-m-d')) }}" required>
                                </div>
                                <small class="form-text text-muted">Ej. 25/10/2024</small>
                            </div>

                            <!-- Campo Observaciones -->
                            <div class="form-group">
                                <label class="form-control-label">Observaciones</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
                                    <textarea name="observaciones" class="form-control" rows="4"
                                        placeholder="Ej. Detalles de la compra">{{ old('observaciones', $toners->observaciones) }}</textarea>
                                </div>
                            </div>

                            <!-- Botón para enviar el formulario -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Guardar Compra</button>
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