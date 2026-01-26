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
        <form action="{{ route('socios') }}" method="GET">
            <button type="submit">Hazte socio</button>
        </form>
        <form action="{{ route('noticias') }}" method="GET">
            <button type="submit">Noticias</button>
        </form>
        <form action="{{ route('contacta') }}" method="GET">
            <button type="submit">Contacto</button>
        </form>
    </nav>
</header>
<main>
    <section>Foto De portada</section>
    <section>
        <article>Noticia de bienvenida 1</article>
        <article>Noticia de bienvenida 2</article>
    </section>
</main>
<footer>
    <h3>© 2026 Albalate FS</h3>
</footer>
</body>
</html>
