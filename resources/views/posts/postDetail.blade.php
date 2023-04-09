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
      <h1>{{$address->address}}</h1>
      <p>{{$address->town}}</p>
    </article>
    @foreach ($allPics as $pics)
      <article>
        <img src="{{$pics->pics}}" alt="image of address" />
      </article>
    @endforeach
  </main>
</body>
</html>