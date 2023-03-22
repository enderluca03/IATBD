<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PassenOpJeDier</h1>
    <h2>All Posts</h2>
    <div>
      <p>Acount</p>
      <a href='{{ route('login') }}'>Login</a>
      <a href='{{ route('register') }}'>Register</a>
      <a href='{{ route('dashboard') }}'>Dashboard</a>
    </div>
    <div>
      <p>Other</p>
      <a href='{{ route('home') }}'>Home</a>
      <a href='{{ route('posts') }}'>All Posts</a>
    </div>
</body>
</html>