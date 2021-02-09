@extends('layouts.textplantilla')

    @section('contenido')

        <h1>Modificación de un grupo</h1>

        <div class="alert bg-light border shadow-sm rounded p-4">

            <form action="/modificarGrupo" method="post">
                @csrf
                Región: <br>
                <input type="text" name="regNombre"
                       value="{{ $grupo->grupo }}"
                       class="form-control">
                <br>
                Descripcion:
                <br>
                <input type="text" name="descgrp"
                value="{{  $grupo->descgrp }}"
                class="form-control">
                <br>
                Privado:
                <br>
                <input type="text" name="privado"
                value="{{ $grupo->privado }}"
                class="form-control">
                <br>
                Intimo:
                <br>
                <input type="text" name="qintimo"
                value="{{  $grupo->qintimo }}"
                class="form-control">
                <br>
                <button class="btn btn-dark">Modificar</button>
                <a href="/adminGrupos" class="btn btn-outline-secondary ml-3">
                    Volver a panel
                </a>
            </form>

        </div>

    @endsection
