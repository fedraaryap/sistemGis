
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">

    <form class="form-signin" method="POST" action="{{route('register')}}">
      {{csrf_field()}}
      <img class="mb-4" src="img/lampung.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">SISTEM INFORMASI GEOGRAFIS</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="name" id="inputName" class="form-control" placeholder="Plase insert your name" required autofocus>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputpassword" class="sr-only">password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="password" required autofocus>
      <label for="inputPassword2" class="sr-only">Password</label>
      <input type="password" name="password_confirmation" id="inputPassword2" class="form-control" placeholder="Password confirmation" required>
      <div class="checkbox mb-3">

      <button class="btn btn-lg btn-primary btn-block" type="submit">register</button>
      <a href= "{{url('login')}}" class="btn btn-lg btn-primary btn-block">login</a>
      
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
