<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add Book</title>
</head>
<body class="addbook">
    @extends('layouts.app')

@section('content')
    <div class="card">
        
        <div class="container">
            <div class="card-header">
                Update Book
            </div>
            <div class="card-body">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" id="title" name="title" value="{{ $book->title }}" required class="form-control">
                    </div>
                
                    <div class="mb-3">
                        <label for="year" class="form-label">Year:</label>
                        <input type="text" id="year" name="year" value="{{ $book->year }}" required class="form-control">
                    </div>
                
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" id="price" name="price" value="{{ $book->price }}" required class="form-control">
                    </div>
                
                    <div class="mb-3">
                        <label for="path" class="form-label">Path:</label>
                        <input type="text" id="path" name="path" value="{{ $book->path }}" required class="form-control">
                    </div>
                
                    <div class="mb-3">
                        <label for="author_id" class="form-label">Author:</label>
                        <select id="author_id" name="author_id" class="form-select">
                            <option value="">Select Author</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User:</label>
                        <select id="user_id" name="user_id" class="form-select">
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $book->user_id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="language_id" class="form-label">Language:</label>
                        <select id="language_id" name="language_id" class="form-select">
                            <option value="">Select Language</option>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}" {{ $language->id == $book->language_id ? 'selected' : '' }}>
                                    {{ $language->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@endsection
</body>
</html>