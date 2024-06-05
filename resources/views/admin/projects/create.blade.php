@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Crea Nuovo Progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo del Progetto</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug del Progetto</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <!-- Aggiungi altri campi del progetto qui -->
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection