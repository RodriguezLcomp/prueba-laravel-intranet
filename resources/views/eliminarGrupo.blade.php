@extends('layouts.textPlantilla')

@section('contenido')
    <h1>Baja de un grupo</h1>
    <div class="alert bg-light border-danger col-6 shadow-sm p-4 mx-auto">
        <form action="/eliminarRegion" method="post">
            <b> Grupo: <span class="lead">{{ $grupo->grupo }} </span> </b><br><br>
            @csrf
            <input type="hidden" id="numeroGrupo" name="numeroGrupo"
            value="{{  $grupo->grupo }}"
            class="form-control">
            <br>
            <input type="hidden" id="nombreGrupo" name="nombreGrupo"
            value="{{  $grupo->descgrp }}"
            class="form-control">
            <br>
            <br>
            <input type="hidden" id="privado" name="privado"
            value="{{ $grupo->privado }}"
            class="form-control">
            <br>
            <br>
            <input type="hidden" id="qintimo" name="qintimo"
            value="{{  $grupo->qintimo }}"
            class="form-control">
            <br>
            <button class="btn btn-danger btn-block my-2">
                Confirmar baja
            </button>
            <a href="/adminGrupos" class="btn btn-outline-secondary btn-block my-2">
                Volver a panel
            </a>
        </form>
    </div>

    <script>
        Swal.fire(
            'Advertencia',
            'Si pulsa "Confirmar baja", se eliminará la región',
            'warning'
        )
    </script>
@endsection
