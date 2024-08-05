@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer une nouvelle tâche</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
