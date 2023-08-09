<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
<head>    
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<div id="login">
  <h3 class="text-center text-white pt-5">Login</h3>
  <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
            
                    <form action="" method="POST">
                    <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username"class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="remember-me" class="text-info"><span>Recuerdame, no llores por favor, te llevo en mi corazon y cerca me tendras, a solas yo te cantare soñando en
                      regresar, recuerdame. </span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                    
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                    
                    <form>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
function funcionAlerta(){
alert("Los datos han sido enviados o lo que quieras");
}
</script>
<style>


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}
/*Tiene que ver con los bordes de la pagina y el body*/
:root {
  --color-primary: #191d2b;
  --color-secondary: #27AE60;
  --color-white: #FFFFFF;
  --color-black: #000;
  --color-grey0: #f8f8f8;
  --color-grey-1: #dbe1e8;
  --color-grey-2: #b2becd;
  --color-grey-3: #6c7983;
  --color-grey-4: #454e56;
  --color-grey-5: #2a2e35;
  --color-grey-6: #12181b;
  --br-sm-2: 14px;
  --box-shadow-1: 0 3px 15px rgba(0,0,0,.3);
}

.light-mode {
  --color-primary: #FFFFFF;
  --color-secondary: #F56692;
  --color-white: #454e56;
  --color-black: #000;
  --color-grey0: #f8f8f8;
  --color-grey-1: #6c7983;
  --color-grey-2: #6c7983;
  --color-grey-3: #6c7983;
  --color-grey-4: #454e56;
  --color-grey-5: #f8f8f8;
  --color-grey-6: #12181b;
}

body {
  background-color: var(--color-primary);
  font-family: "Poppins", sans-serif;
  font-size: 1.1rem;
  color: var(--color-white);
  transition: all 0.4s ease-in-out;
}

/*Empieza el login */




</style>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
