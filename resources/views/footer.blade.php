<footer class="bg-dark text-light py-3">
    <div class="container" style="margin-left: 250px;">
      <div class="row" style="display:grid; grid-template-columns: 1fr 1fr; grid-gap: 5px;" >
        <div class="col-md-6">
          <p>&copy; {{ date('Y') }} Hawi Software Solution</p>
          @if(Auth::check())
          <div class="card mt-3" style="width: 300px">
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
        <div class="col-md-6 text-md-end" style="margin-left: 200px; color:white">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" style="color: white">Contact us - 09......</a></li><br>
            <li class="list-inline-item"><a href="#" style="color: white">Adama, Ethiopia</a></li><br>
            <li class="list-inline-item"><a href="#" style="color: white">Email:www.hawisoftwaresolution@gmail.com</a></li><br>
          </ul>
        </div>
      </div>
    </div>
  </footer>