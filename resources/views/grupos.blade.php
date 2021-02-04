@extends('layouts.textPlantilla')
@include('layouts.header')

    @section('contenido')


        <ul class="list-group col-6 mx-auto">
                <h1>Grupos</h1>

        <tr>
                <th>Grupo</th>
                <th>Descripcion</th>
                <th>Privado</th>
                <th>Intimo</th>
        </tr>
        <br>
        @foreach( $grupos as $grupo )
        <tr>
                <th>{{ $grupo->grupo }}</th>
                <th>{{ $grupo->descgrp }}</th>
                <th>{{ $grupo->privado }}</th>
                <th>{{ $grupo->qintimo }}</th>
        </tr>
        <br>
        @endforeach
        </ul>

    @endsection
@include('layouts.footer')
