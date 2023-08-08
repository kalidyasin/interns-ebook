<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Display Books</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @extends('layouts.app')

                @section('content')
                <div class="container">
                    <table class="table table-striped">
                    <h3>List of added books</h3>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>User</th>
                            <th>Author</th>
                            <th>Language</th>
                            <th>Path</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->user_id }}</td>
                            <td>{{ $book->author_id }}</td>
                            <td>{{ $book->language_id }}</td>
                            <td>{{ $book->path }}</td>
                            <td>
                                <a href="" class="btn btn-success" style="background-color: rgb(39, 43, 32); color:white">Edit</a>
                                <a href="{{url("deletebook/".$book->id )}}" class="btn btn-danger" style="background-color: rgb(255, 7, 7); color:white">Delete</a>
            
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                @endsection
            </div>
        </div>
    </div>
</body>
</html>