<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add Book</title>
</head>
<body class="addbook">
    <div class="container">
        @extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header" style="background-color: blue; color:white">
            Add Book
        </div>
        <div class="card-body">
            <form action="{{ route('bookstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
            <br>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="year" id="year" class="form-control" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="path">image</label>
                    <input type="file" name="image" id="path" class="form-control" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="path">Path</label>
                    <input type="file" name="path" id="path" class="form-control" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="price">User</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->name }}" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select name="author_id" id="author_id" class="form-control" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                    </select>
                </div>
                <br>

                <div class="form-group">
                    <label for="language_id">Language</label>
                    <select name="language_id" id="language_id" class="form-control" required>
                    @foreach($languages as $language)
                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                    @endforeach
                    </select>
                </div>
                <br>
                
                <label for="categories">Categorries</label>
                <div class="form-group">
                    @php
                $categories = App\Models\Category::all();
                @endphp
                <select name="categories[]" multiple>
                    @foreach($categories as $category)
                       <option value="{{ $category->id }}">
                          {{ $category->name }} 
                       </option>
                    @endforeach
                 </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@endsection
    </div>
</body>
</html>