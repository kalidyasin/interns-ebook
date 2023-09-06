<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Update the langauge list</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
<form action="{{ route('languages.update', $language->id) }}" method="POST">
    @csrf


    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $language->name }}">

    <label for="cont">description:</label>
    <input type="text" name="description" value="{{ $language->description }}">
    <label for="cont">remark:</label>
    <input type="text" name="remark" value="{{ $language->remark }}">
    

    


    <button type="submit">Save</button>
</form>
</div>

@endsection
</body>
</html>