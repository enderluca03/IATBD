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
    <h2>All posts</h2>
    @foreach ($addresses as $address)
      <h1>{{$address->address}}</h1>
      <p>{{$address->town}}</p>
      
    @endforeach
    @foreach ($pics as $pic)
     <img src={{$pic->pics}} alt="image of address" />
    @endforeach
  </main>
</body>
</html>