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
  <main class="contentMain">
    <section class="titleText">
      <h1>PassenOpJeDier</h1>
    </section>
    <section>
      <form method="post" class="animalFilter" name="animalFilter" id="animalFilter" enctype="multipart/form-data" action="{{ route('animals.filter') }}">
        @csrf
        <select id="species" name="species">
            <option value="Dog">Hond</option>
            <option value="Cat">Kat</option>
            <option value="Fish">Vis</option>
            <option value="Bird">Vogel</option>
            <option value="Guinea Pig">Cavia</option>
        </select>
        <input type="submit" id="submit" value="Filter">
      </form>
    
        
      <form method="post" class="clearFilter" name="clearFilter" id="clearFilter" enctype="multipart/form-data" action="{{ route('animals.clearFilter') }}">
        @csrf
        <input type="submit" id="submit" value="Clear">
      </form>
    
    </section>
    @foreach ($animals as $animal)
      <article class="detailCard">
        <h1>{{$animal->name}}</h1>
        <a href="/animals/{{$animal->animalID}}">
          Naar dit dier
        </a>
      </article>
    @endforeach
  </main>
</body>
</html>