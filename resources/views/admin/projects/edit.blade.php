@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Modifica Progetto</h1>
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo del Progetto</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug del Progetto</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $project->slug }}" required>
        </div>
        <!-- Aggiungi altri campi del progetto qui -->
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection