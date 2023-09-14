@extends('layouts.main')

@section('page-title', 'Crea nuova pasta')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Crea nuova pasta
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col bg-primary py-4">
            <form action="{{ route('pastas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="src" class="form-label">Src</label>
                    <input type="text" maxlength="1024" class="form-control" id="src" name="src" placeholder="Enter value...">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="128" class="form-control" id="title" name="title" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="16" class="form-control" id="type" name="type" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="cooking_time" class="form-label">Cooking Time</label>
                    <input type="number" min="1" max="15" class="form-control" id="cooking_time" name="cooking_time" placeholder="Enter value...">
                </div>

                <div class="mb-3">
                    <label for="weight" class="form-label">Weight</label>
                    <input type="number" min="100" max="5000" class="form-control" id="weight" name="weight" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success w-100">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
