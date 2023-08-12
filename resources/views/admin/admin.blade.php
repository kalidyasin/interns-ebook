<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color: rgb(234, 226, 210)">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                @section('sidebar')
                
              
                @include('left-sidebar')
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="error">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="box">
                              <a href="{{ route('listforbook') }}" style="font-size:30px">List Of The Added Books</a>
                              <p> If you are admin and want to view the list of the added books 
                                please CLICK on this box.
                              </p>
                            </div>
                            <div class="box">
                              <a href="{{ route('displayauthor') }}" style="font-size:30px">List Of The Added Author</a>
                              <p>If you are admin and want to view the list of the added author 
                                please CLICK on this box.</p>
                            </div>
                            <div class="box">
                              <a href="{{ route('listlanguage') }}"style="font-size:30px">List Of The Added Language</a>
                              <p>If you are admin and want to view the list of the added language 
                                please CLICK on this box.</p>
                            </div>
                            <div class="box">
                              <a href="{{route('listscategory')}}" style="font-size:30px">List Of The Added Category</a>
                              <p>If you are admin and want to view the list of the added category 
                                please CLICK on this box.</p>
                            </div>
                          </div>
                        
                        <section style="margin-top: 20px">
                            @include('footer')
                        </section>
            
                @endsection
    
            </div>
        </div>
    </div>
    <style>
        .box {
          width: 400px;
          height: 200px;
          border: 1px solid rgb(37, 27, 27);
          padding: 10px;
          margin-left: 270px;
          background-color: rgb(213, 208, 208);
          color: black;
          border-radius: 10px;
          box-shadow: black 50px;
        }
        .container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
    }
      </style>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@endsection
</body>
</html>     





