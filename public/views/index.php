
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Senac na Minha História</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="controller.php" method="POST">
  <img class="mb-4" src="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png" alt="" width="125">
  <h1 class="h3 mb-3 font-weight-normal">Senac na Minha História</h1>
  <label for="inputEmail" class="sr-only">E-mail</label>
  <input name="username" type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
  <div class="checkbox mb-3">
    <label><input type="checkbox" value="remember-me"> Lembrar Senha</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
  <p class="mt-5 mb-3 text-muted">&copy; Senac São Paulo - 2024</p>
</form>

<script>
  //Redirect page on click button to page home.php
  document.querySelector('button').addEventListener('click', function(){
    window.location.href = 'home.php';
  });
</script>
</body>
</html>
