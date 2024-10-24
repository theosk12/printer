@extends('layouts.app')

@section('content')
    <h1>Créer un Contact</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="phone">Téléphone</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="compagnie">Compagnie</label>
            <input type="text" name="compagnie">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message"></textarea>
        </div>
        <button type="submit">Créer</button>
    </form>
@endsection
