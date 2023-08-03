<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book category</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Add Book Category</div>
            <div class="card-body">
                <form method="POST" action="{{ route('book_categories.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="book_id">Book</label>
                        <select name="book_id" id="book_id" class="form-control">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}">{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Book Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
    
</body>
</html>