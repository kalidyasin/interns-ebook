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
        <div class="card-header">
            Update Book
        </div>
        <div class="card-body">
            <form action="{{ url('bookUpdate/'.$book->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$book->title}}" required>
                </div>
            
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" name="year" id="year" class="form-control" value="{{$book->year}}" required>
                </div>
            
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$book->price}}" required>
                </div>
                
            
                <div class="form-group">
                    <label for="path">Path</label>
                    <input type="file" name="path" id="path" class="form-control" value="{{$book->path}}" required>
                </div>
                <div class="form-group">
                    <label for="user_id">User</label>
                    <select name="" id="" class="form-control" required>
                    @foreach($users->all() as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
               
            </div>
            
                
            
                <button type="submit" class="btn btn-primary">Update Book</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@endsection
</body>
</html>