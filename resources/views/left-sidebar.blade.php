<!-- File: resources/views/left-sidebar.blade.php -->

<div class="sidebar" style="background-color: #00ff00; width: 200px;">
    <ul>
        <li><a href="#">Products</a></li>
        <li><a href="{{ route('addBook') }}">Add Book</a></li>
        <li><a href="{{ route('author') }}">Add Authors </a></li>
        <li><a href="{{ route('language') }}">Add Language </a></li>
        <li><a href="{{ route('category') }}">Add Category </a></li>
        <li><a href="{{ route('category') }}">Book Category </a></li>
        <li><a href="#">Users</a></li>
    </ul>
</div>

   
</div>
<style>
.sidebar {
    width: 250px;
    height: 100%;
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
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
}

.sidebar ul li a:hover {
    background-color: #ddd;
}
</style>