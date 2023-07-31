<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Add Book</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Add Book
        </div>
        <div class="card-body">
            <form action="{{ route('books.bookstore') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="user">User</label>
                    <input type="text" name="author" id="author" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="language">
                        <div class="form-group">
                            <label for="author">Language</label>
                            <input type="text" name="author" id="author" class="form-control" required>
                        </div>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@endsection
</body>
</html>