@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier la tâche</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Titre</label>
            <input type="text" id="name" name="name" value="{{ $task->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
