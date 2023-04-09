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
    <h1>PassenOpJeDier</h1>
    @foreach ($animals as $animal)
      <article class="detailCard">
        <h1>{{$animal->name}}</h1>
        <a href="/animals/{{$animal->name}}">
          Naar dit dier
         </a>
      </article>
    @endforeach
  </main>
</body>
</html>