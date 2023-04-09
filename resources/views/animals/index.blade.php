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
    <article class="detailCard">
    @foreach ($animals as $animal)
      <article>
        <h1>{{$animal->name}}</h1>
      </article>
    @endforeach
    @foreach ($search as $searched)
      <a href="/animals/{{$searched->id}}">
        Naar dit dier
      </a>
    @endforeach
    </article>
  </main>
</body>
</html>