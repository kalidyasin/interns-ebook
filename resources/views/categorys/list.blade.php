<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Display categories</title>
</head>
<body>
    @extends('layouts.app')
    
    @section('content')
    <div class="container">
        <table class="table">
            <h3>Categories</h3>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Editor</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->editor }}</td>
                        <th>
                            <a style="background-color: black" class="btn btn-success" href=" {{ route('categories.edit', $category->id) }}">Edit</a>
                            <a style="background-color: red" class="btn btn-danger" href="{{url("deletecategory", $category->id)}}">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>