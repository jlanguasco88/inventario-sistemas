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
                        <form method="POST" action="{{route('impresoras.store')}}">
                            @csrf <!-- Token de seguridad de Laravel -->

                            <div class="form-group">
                                <label class="form-control-label">Descripcion</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                    <input type="text" name="descripcion" class="form-control" placeholder="Ej. HP - 107A"
                                        required>
                                </div>
                            </div>

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

                            <!-- Campo Orden -->
                            <div class="form-group">
                                <label class="form-control-label">Orden</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                    <input type="text" name="orden" class="form-control" placeholder="Ej. 155-156165-156465"
                                        required>
                                </div>
                            </div>

                            <!-- Campo Ubicacion -->
                            <div class="form-group">
                                <label class="">Ubicacion </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-tint"></i></div>
                                    <input type="text" name="ubicacion" class="form-control" placeholder="Ej. Personal15"
                                    >
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