<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
        body{
            background-color:gray;  
            padding: 300px;
            width:400px;
            padding-top:50px;
        }
        ul{
            color:white;
        }
    </style>
</head>
<body>
    <h1>Contact</h1>
    <ul>
    <footer class="bg-dark text-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; {{ date('Y') }} Hawi Software Solution</p>
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
        <div class="col-md-6 text-md-end">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Contact us - 09......</a></li>
            <li class="list-inline-item"><a href="#">Adama, Ethiopia</a></li>
            <li class="list-inline-item"><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    </ul>
    <p>Contact us for any inquiries or support.</p>
</body>
</html>