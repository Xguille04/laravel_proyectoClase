<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albalate FS</title>
</head>
<body>
<header>
    <h1>Albalate FS</h1>
    <nav>
        <form action="{{ route('home') }}" method="GET">
            <button type="submit">Ir a Home</button>
        </form>
        <form action="{{ route('sobre') }}" method="GET">
            <button type="submit">Sobre Nosotros</button>
        </form>
    </nav>
</header>
</body>
</html>
