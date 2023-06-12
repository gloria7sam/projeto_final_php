<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body class="login">
    <header>

    </header>
<main>
<div class="">
<h1 class="text-center mt-5 mb-5">Login</h1>
<form class="formulario bg-body-secondary p-5 rounded-5 shadow">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" >Email</label>
      <input type="email" name ="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      <div id="emailHelp" class="form-text"></div>
      @error('email')
      <div class="invalid-feedback">
        Por favor, introduza um email!
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label" >Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" @required(true)>
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    
  </form>
</div>
{{-- <img src="img/banda.jpg" alt="banda"> --}}
</main>
<footer>

</footer>

<script src="resources/js/main.js"></script>
</body>
</html>