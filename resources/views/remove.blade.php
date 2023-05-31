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
    <article>
      <h1>Dieren</h1>
      @foreach ($animals as $animal)
        <article class="detailCard">
          <h1>{{$animal->name}}</h1>
          <a href="/deleteAnimal/{{$animal->animalID}}">
            Verwijder dit element
          </a>
        </article>
      @endforeach
      </article>
    <article> 
      <h1>Adressen</h1>   
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
        <h1>Gebruikers permanent blokkeren</h1>
        @foreach ($users as $user)
          <article class="detailCard">
            <h1>{{$user->name}}</h1>
            <a href="/deleteUser/{{$user->id}}">
              Verwijder dit element
            </a>
          </article>
        @endforeach
    </article>
  </main>
</body>
</html>