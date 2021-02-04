@extends('layouts.textPlantilla')

    @section('contenido')

        <h1>Panel de administración de Grupos</h1>

        @if( session('mensaje') )
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table table-striped table-hover table-borderless">
            <thead class="thead-dark">
                <tr>
                    <th>Grupo</th>
                    <th>Descripcion</th>
                    <th>Privado</th>
                    <th>Intimo</th>
                    <th colspan="2">
                        <a href="/agregarGrupo" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach( $grupo as $grupos )
                <tr>
                    <td>{{ $grupos->grupo }}</td>
                    <td>{{ $grupos->descgrp }}</td>
                    <td>{{ $grupos->privado }}</td>
                    <td>{{ $grupos->qintimo }}</td>

                    <td>
                        <a href="/modificarGrupo/{{ $grupos->grupo }}" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="/eliminarGrupo/{{ $grupos->grupo }}" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endsection
