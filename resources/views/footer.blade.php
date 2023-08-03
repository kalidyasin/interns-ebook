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