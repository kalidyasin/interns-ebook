<!-- File: resources/views/left-sidebar.blade.php -->

<div class="sidebar">
    <ul>
       
        <li><a href="#">Products</a></li>
        <li><a href="{{ route('addBook') }}">Add Book</a></li>
        <li><a href="#">Users</a></li>
    </ul>

    @if(Auth::check())
        <div class="card mt-3">
            <div class="card-header">
             Profile
            </div>
            <div class="card-body">
                <p>Name: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
                <p>Joined: {{ Auth::user()->created_at->diffForHumans() }}</p>
            </div>
        </div>
    @endif
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