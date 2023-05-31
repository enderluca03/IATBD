<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <x-navbar/>
  <main>
    <section class="pageLink">
      <article class="detailCard">
        <p>Bekijk alle dieren</p>
        <a href="{{ route('animals') }}">Dieren</a>
      </article>
      <article class="detailCard">
        <p>Voeg een huisdier toe</p>
        <a href="{{ route('newAnimal') }}">Dier toevoegen</a>
      </article>
      <article class="detailCard">
        <p>Bekijk alle adressen</p>
        <a href="{{ route('allPosts') }}">Alle adressen</a>
      </article>
      <article class="detailCard">
        <p>Maak een nieuw adres</p>
        <a href="{{ route('newPost') }}">Nieuw adres</a>
      </article>
    </section>
  </main>
</body>
</html>