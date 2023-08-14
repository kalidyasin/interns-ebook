<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Update the form</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="Container">
            <!-- edit.blade.php -->
<form action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" name="name" value="{{ $author->name }}"><br>

    <label for="photo">Photo:</label><br>
    <input type="file" name="photo" value="{{ $author->photo }}"><br>

    <label for="cont">contact_information:</label><br>
    <input type="text" name="cont" value="{{ $author->contact_info }}"><br>

    <button type="submit">Save</button>
</form>
    </div>
    @endsection
</body>
</html>