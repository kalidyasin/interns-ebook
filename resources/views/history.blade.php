<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>history</title>

</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">

        <h1>history</h1>

        <table class="table">
            <thead>
                <tr>
                  
                    <th>book </th>
                    <th>time</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($history as $historyitem)
                @php
            $book = \App\Models\Book::find($historyitem->book_id);
            if ($book) {
                $bookTitle = $book->title;
            }
        @endphp
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $historyitem->created_at }}</td>
                        

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>