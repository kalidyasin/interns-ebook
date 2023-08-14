<!-- File: resources/views/left-sidebar.blade.php -->

<div class="sidebar" style="background-color: blue; width: 200px; ">
    <ul>
        <li><h1>Works of Admin</h1></li>
        <li><a href="{{ route('bookPage')}}">Add Books </a></li>
        <li><a href="{{ route('author') }}">Add Authors </a></li>
        <li><a href="{{ route('language') }}">Add Language </a></li>
        <li><a href="{{ route('category') }}">Add Category </a></li>
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
    color: #ffffff;
}

.sidebar ul li a:hover {
    background-color: #000000;
}

</style>