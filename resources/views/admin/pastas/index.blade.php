@extends('layouts.main')

@section('page-title', 'Index di Pasta')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Index di Pasta
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('pastas.create') }}" class="btn btn-success w-100">
                + Aggiungi
            </a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Cottura</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pastas as $pasta)
                        <tr>
                            <th scope="row">{{ $pasta->id }}</th>
                            <td>{{ $pasta->title }}</td>
                            <td>{{ $pasta->cooking_time }}</td>
                            <td>{{ $pasta->weight }}</td>
                            <td>
                                <a href="{{ route('pastas.show', ['pasta' => $pasta->id]) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <a href="{{ route('pastas.edit', ['pasta' => $pasta->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                                <form
                                    action="{{ route('pastas.destroy', ['pasta' => $pasta->id]) }}"
                                    class="d-inline-block"
                                    method="POST"
                                    onsubmit="return confirm('Sei sicuro di voler cancellare questo elemento?');">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
