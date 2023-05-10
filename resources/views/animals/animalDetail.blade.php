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
    <section class="titleText">
      <h1>PassenOpJeDier</h1>
    </section>
    <article class="detailCard">
      <h1>Naam: {{$animal->name}}</h1>
      <p>{{$animal->note}}</p>
      <p>Leeftijd: {{$animal->age}}</p>
      <p>Type: {{$animal->species}}</p>
      <p>{{$name->name}}</p>
    </article>
    @foreach ($allPics as $pics)
      <article>
        <img src="/media/Animals/{{$pics->pics}}" alt="image of the animal" />
      </article>
    @endforeach
  </main>
</body>
</html>