@extends('layouts.app')

@section('content')
    <h1>Créer un Produit</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Image principale</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label for="image2">Image 2 (facultative)</label>
            <input type="file" name="image2">
        </div>
        <div>
            <label for="image3">Image 3 (facultative)</label>
            <input type="file" name="image3">
        </div>
        <div>
            <label for="image4">Image 4 (facultative)</label>
            <input type="file" name="image4">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" required>
        </div>
        <div>
            <label for="phone_number">Numéro de téléphone</label>
            <input type="text" name="phone_number" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="is_published">Publier</label>
            <input type="checkbox" name="is_published">
        </div>
        <button type="submit">Créer</button>
    </form>
@endsection
