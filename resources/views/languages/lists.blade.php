<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>List of added language</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Languages</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Remark</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($languages as $language)
                    <tr>
                        <td>{{ $language->name }}</td>
                        <td>{{ $language->description }}</td>
                        <td>{{ $language->remark }}</td>
                        <th>
                            <a style="background-color: black" class="btn btn-success" href=" {{ route('languages.edit', $language->id) }}">Edit</a>
                            <a style="background-color: red" class="btn btn-danger" href="{{url("deletelanguage", $language->id)}}">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>