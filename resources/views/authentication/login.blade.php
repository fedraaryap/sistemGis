

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SiGeografis</title>

    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{route('loginform')}}">
      {{csrf_field()}}
      <img class="mb-4" src="img/logo1.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">SISTEM INFORMASI GEOGRAFIS</h1>


      <label for="inputemail" class="sr-only">User Name</label>

      <input type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="email"  value="{{ old('email') }}" required autofocus>
       @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
       @endif




      <label for="inputPassword" class="sr-only">Password</label>

      <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" required>
         @if ($errors->has('password'))
              <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
               </span>
        @endif
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
     
          
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>

