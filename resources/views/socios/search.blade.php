@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3><a href="{{ route('socios.index') }}" class="text-dark">Socios</a></h3>
        <a href="{{ route('socios.create') }}" class="btn btn-primary">Nuevo</a>
    </div>

    <div class="d-flex justify-content-center">
        <div class="mb-4">
            <form action="{{ route('search.socio') }}" class="form-inline">
                @csrf
                <div class="input-group input-group-md">

                    <input class="form-control form-control-navbar"
                        name="search" type="search"
                        placeholder="Nombre Socio"
                        aria-label="Search"
                        required
                    >

                    <div class="input-group-append">
                        <button class="btn btn-navbar bg-primary text-white" type="submit">
                            @include('icons.icon-search')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre Socio</th>
                <th scope="col">N. Placa</th>
                <th scope="col">Asociación</th>
                <th scope="col">Expedición</th>
                <th scope="col">Revalicación</th>
                <th scope="col">N. Operación</th>
                <th scope="col">Vigencia Operación</th>
                <th scope="col">Actividad</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($socios as $socio)
                <tr>
                    <td>{{ $socio->nombre_socio }}</td>
                    <td>{{ $socio->num_placa }}</td>
                    <td>{{ $socio->nombre_asociacion }}</td>
                    <td>{{ $socio->expedicion }}</td>
                    <td>{{ $socio->revalidacion }}</td>
                    <td>{{ $socio->num_operacion }}</td>
                    <td>{{ $socio->vigencia_operacion }}</td>
                    <td>
                        <a href="{{ route('socios.show', $socio->url) }}">
                            @include('icons.icon-see')
                        </a>
                    </td>
                </tr>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
            @endforelse
        </tbody>
    </table>

    <div class="overflow-auto mt-2">
        {{ $socios->links() }}
    </div>
</div>
@endsection