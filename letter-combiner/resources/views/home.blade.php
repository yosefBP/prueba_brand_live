@extends('layout.base')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Por favor ingrese los siguientes datos:</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('string.calculatorCombiner') }}" method="post">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inlineFormInput">Lista de letras</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ejemplo: MFJNERJNRFKV" name="letters">
                </div>
                <div class="col-auto">
                    <label for="inlineFormInputGroup">Numero de campos vacios</label>
                    <div class="input-group mb-2">
                        <input type="number" class="form-control" id="inlineFormInputGroup" name="lengthWord">
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Calcular combinaciones</button>
            </div>
        </form>

        <!-- Hide Table -->
        @isset($arrPassResult)
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Palabras sugeridas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($arrPassResult as $value)
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $value }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endisset
    </div>
</div>
@endsection