<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    <title> Book</title>
</head>
<body>
    <!-- File: resources/views/left-sidebar.blade.php -->

<div class="sidebar" style="background-color: blue; width: 200px; ">
    <ul>
        <h1>Category</h1>
        <ul>
    @php
      $categories = App\Models\Category::all();
    @endphp
            @foreach($categories as $category)
            <li>
              <a href="{{ route('user.category.books', $category) }}">{{ $category->name }}</a>
            </li>
            @endforeach
            </ul>
    </ul>
    <ul>
        <h3>Languages <i class="bi bi-globe"></i></h3>
        <h4>Subtitle</h4>        <ul>
    @php
      $languages = App\Models\language::all();
    @endphp
            @foreach($languages as $language)
            <li>
              <a href="">{{ $language->name }}</a>
            </li>
            @endforeach
            </ul>
    </ul>
</div>

   
</div>
<style>
.sidebar {
    width: 250px;
    height: 130%;
    position: absolute;
    top: 74px;
    left: 0;
    background-color: #bfc1d8;
    padding: 20px;
    color: white;
}

.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li a {
    display: flex;
    padding: 10px;
    text-decoration: none;
    color: #ffffff;
}

.sidebar ul li a:hover {
    background-color: #000000;
}

</style>
</body>
</html>