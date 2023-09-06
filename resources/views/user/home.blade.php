<html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> <title>E-book</title> </head> <body style="background-color: rgb(255, 255, 255)"> @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            @section('sidebar')
            
          
            @include('user.sidebar')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="error">
                            {{ session('error') }}
                        </div>
                    @endif
                   
                    <div class="container" style="margin-left:20px; width:700px">
                        <h1>Search Books</h1>
                        <form action="/search" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="query" placeholder="Search books..." required>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="container" >
                            @section('content')
                            <h1 style="margin-left: 200px">Books in {{ $category->name }} category</h1>
                            <div class="row" style="margin-left: 230px">
                                @foreach($books as $book)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $book->title }}</h5>
                                            <p class="card-text">Author: {{ $book->author->name }}</p>
                                            <p class="card-text">Price: {{ $book->price }}</p>
                                            <p class="card-text">Language: {{ $book->language->name }}</p>
                                            <a href="{{ route('book.read', ['id' => $book->id]) }}" class="btn btn-primary">Read</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endsection
                        </div>                   
                </div>

            @endsection

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@endsection

</body> </html>