@extends('layouts.app')

@section('content')
    <h1>Liste des Produits</h1>
    <a href="{{ route('produits.create') }}">Créer un produit</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>
                        <a href="{{ route('produits.show', $produit->id) }}">Voir</a>
                        <a href="{{ route('produits.edit', $produit->id) }}">Modifier</a>
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
