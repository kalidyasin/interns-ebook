<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Display authors</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h3>List of authors</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Contact Information</th>

                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->photo }}</td>
                    <td>{{ $author->contact_info }}</td>

                    <th>
                        <a style="background-color: hsl(0, 0%, 0%)" href=" {{route('authors.edit', $author->id)}}" class="btn btn-success">Edit</a>
                        <a style="background-color: red" href=" {{url("deleteauthor/".$author->id )}}" class="btn btn-danger">Delete</a>
                    </th>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>