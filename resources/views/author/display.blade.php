<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display authors</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Author</h1>

        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{ $author->photo }}" alt="{{ $author->name }}">
            <div class="card-body">
                <h2>{{ $author->name }}</h2>
                <p class="card-text">{{ $author->contact_info }}</p>
            </div>
        </div>
    </div>
@endsection
</body>
</html>