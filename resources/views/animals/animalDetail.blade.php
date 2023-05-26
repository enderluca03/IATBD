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
    <section class="titleText">
      <h1>PassenOpJeDier</h1>
    </section>
    <article class="detailCard">
      <h1>Naam: {{$animal->name}}</h1>
      <p>{{$animal->note}}</p>
      <p>Leeftijd: {{$animal->age}} jaar</p>
      <p>Type: {{$animal->species}}</p>
      <p>Eigenaar: {{$name->name}}</p>
      <p>Prijs: {{$search->payment}} euro</p>
      <p>Van: {{$search->from}}, tot: {{$search->to}}
    </article>
    @foreach ($allPics as $pics)
      <article>
        <img src="/media/Animals/{{$pics->pics}}" alt="image of the animal" />
      </article>
    @endforeach
            
    <form method="post" class="accept" name="accept" id="accept" enctype="multipart/form-data" action="{{ route('animals.accept') }}">
      @csrf
      <input type="hidden" name="animal_id" value="{{$id}}">
      <input type="submit" id="submit" value="Ik wil">
    </form>

    <h2>Add a Review</h2>
    <form method="post" action="{{ route('animals.addReview') }}">
        @csrf
        <input type="hidden" name="animal_id" value="{{ $animal->animalID }}">
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" min="1" max="5" required>
        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id="feedback" rows="3" required></textarea>
        <button type="submit">Submit</button>
    </form>
  </main>
</body>
</html>