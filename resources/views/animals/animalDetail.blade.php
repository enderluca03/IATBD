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
      <h1>{{$animal->name}}</h1>
      <p>{{$animal->note}}</p>
      <p>{{$animal->type}}</p>
      @foreach ($allPics as $pics)
        <article>
          <img src="/media/Animals/{{$pics->pics}}" alt="image of the animal" />
        </article>
      @endforeach
    </article>
  </main>
</body>
</html>