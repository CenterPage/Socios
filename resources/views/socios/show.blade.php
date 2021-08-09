<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muni Castilla</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .marca-de-agua {
            /*background-image: url("/img/escudo.png");*/
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100px 100px !important;
            width: 100%;
            height: auto;
            margin: auto;
            position: absolute;
            /*margin-top: 9rem;*/
        }
        .marca-de-agua img {
            padding: 0;
            width: 100%;
            height: auto;
            opacity: 0.1;
        }
    </style>
</head>
<body>
    <div class="marca-de-agua">
        <img alt="" src="{{ asset('/img/escudo.png') }}" />
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Muni Castilla</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      </div>
    </nav>

    <div class="container py-4">
        <div class="col-sm d-flex justify-content-center flex-column align-items-center ">
            <li class="list-group-item border-0 m-0 pt-0 text-center bg-transparent">
                <strong><h5 class="font-weight-bold">TARJETA DE CIRCULACIÓN</h5></strong>
            </li>
{{--             <img
                src="{{ asset($socio->image) }}"
                alt="{{ $socio->nombre_socio }}"
                class='img-thumbnail' style="width: 150px; height: 200px;"
            > --}}

        </div>

        @guest
        @else
            @if (optional(auth()->user()->admin_since == 1))
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <div class="form-check">
                        <form  method="POST" action="{{ route('socios.destroy', $socio) }}">
                            @csrf @method('DELETE')
                                <input class="form-check-input"
                                    name="status"
                                    type="checkbox"
                                    value="1"
                                    {{ old('status', $socio->status) == 1 ? 'checked' : '' }}
                                    id="defaultCheck1"
                                    onchange="this.form.submit()"
                                >
                                <label class="form-check-label" for="defaultCheck1">
                                    Código QR Generado
                                </label>
                        </form>
                    </div>
                </div>
            @endif
        @endguest

        <div class="d-flex justify-content-center flex-column align-items-center">
            <ul class="list-group col-md-3">
                <li class="list-group-item color-box-header">
                    <strong class="font-weight-bold">MIEMBRO DE LA ASOCIACIÓN</strong>
                </li>
                <li class="list-group-item ">
                    <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($socio->nombre_socio) }}
                </li>
                <li class="list-group-item ">
                    <strong>D.N.I:</strong> {{ $socio->dni_socio }}
                </li>
                <li class="list-group-item ">
                    <strong>N. Placa:</strong> {{ $socio->num_placa }}
                </li>
                <li class="list-group-item ">
                    <strong>Asociación:</strong> {{ Illuminate\Support\Str::title($socio->nombre_asociacion) }}
                </li>
                <li class="list-group-item ">
                    <strong>N. Operación:</strong> {{ Illuminate\Support\Str::title($socio->num_operacion) }}
                </li>
                <li class="list-group-item ">
                    <strong>Vigencia:</strong> {{ Illuminate\Support\Str::title($socio->vigencia_operacion) }}
                </li>
            </ul>
            {{-- <ul class='list-group col-md-3 mt-3'>
                <li class="list-group-item color-box-header"><strong>ADULTO RESPONSABLE</strong></li>
                <li class="list-group-item color-box">
                    <strong>Nombre:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->name) }}
                </li>
                <li class="list-group-item color-box">
                    <strong>Apellidos:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->apellidos) }}
                </li>
                <li class="list-group-item color-box">
                    <strong>Celular:</strong> {{ $listadomascota->user->celular }}
                </li>
                <li class="list-group-item color-box">
                    <strong>Dirección:</strong> {{ Illuminate\Support\Str::title($listadomascota->user->direccion) }}
                </li>
                <li class="list-group-item color-box">
                    <strong>F. Emisión:</strong> {{ Carbon\Carbon::parse($listadomascota->created_at)->format('Y-m-d') }}
                </li>
            </ul> --}}
        </div>
    </div>
</body>
</html>
