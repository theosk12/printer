<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('produits.index') }}">Produits</a>
            <a href="{{ route('contacts.index') }}">Contacts</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Application</p>
    </footer>
</body>
</html>
