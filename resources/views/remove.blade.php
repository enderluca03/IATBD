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
    <article>    
      @foreach ($addresses as $address)
      <article class="detailCard">
        <h1>{{$address->address}}</h1>
        <a href="/deletePost/{{$address->address}}">
          Verwijder dit element
        </a>
      </article>
    @endforeach
    </article>
    <article>
      @foreach ($animals as $animal)
        <article class="detailCard">
          <h1>{{$animal->name}}</h1>
          <a href="/deleteAnimal/{{$animal->animalID}}">
            Verwijder dit element
          </a>
        </article>
      @endforeach
      </article>
  </main>
</body>
</html>