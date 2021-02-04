@extends('layouts.textPlantilla')

    @section('contenido')

        <h1>Alta de un nuevo grupo</h1>

        <div class="alert bg-light shadow-sm col-8 mx-auto p-4">
            <form action="/agregarGrupo" method="post">
                @csrf
                <label for="numeroGrupo">Numero del grupo</label>
                <input type="text"
                       name="numeroGrupo" id="num_grp"
                       class="form-control"> <br>
                <label for="nombreGrupo">Descripcion</label>
                <input type="text"
                        name="nombreGrupo" id="nombreGrp"
                        class="form-control"> <br>
                <label for="privado">Privado</label>
                <input type="text"
                        name="privado" id="privado"
                        class="form-control"> <br>
                <label for="intimo">Intimo</label>
                <input type="text"
                        name="intimo" id="intimo"
                        class="form-control"> <br>
                <button class="btn btn-dark">
                    Agregar Grupo
                </button>
                <a href="/adminGrupos" class="btn btn-outline-secondary ml-3">
                    volver a panel
                </a>
            </form>
        </div>

    @endsection
