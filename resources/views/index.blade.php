<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
<body>
  <x-navbar/>
  <main>
    <section class="pageLink">
      <article class="detailCard">
        <p>Bekijk alle verzoeken</p>
        <a href="{{ route('allPosts') }}">Alle verzoeken</a>
      </article>
      <article class="detailCard">
        <p>Maak een nieuw verzoek</p>
        <a href="{{ route('newPost') }}">Nieuw verzoek</a>
      </article>
      <article class="detailCard">
        <p>Bekijk alle dieren</p>
        <a href="{{ route('animals') }}">Dieren</a>
      </article>
      <article class="detailCard">
        <p>Voeg een huisdier toe</p>
        <a href="{{ route('newAnimal') }}">Dier toevoegen</a>
      </article>
    </section>
  </main>
</body>
</html>