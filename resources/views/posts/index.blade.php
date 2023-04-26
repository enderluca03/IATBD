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
  <main class="contentMain">
    <section class="titleText">
      <h1>PassenOpJeDier</h1>
    </section>
    @foreach ($addresses as $address)
      <article class="detailCard">
        <h1>{{$address->address}}</h1>
        <p>{{$address->town}}</p>
        <a href="/posts/{{$address->address}}">
          Naar deze post
        </a>
      </article>
    @endforeach
  </main>
</body>
</html>