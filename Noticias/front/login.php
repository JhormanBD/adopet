<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SGV | Tiger</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
               <div class="dropdown profile-element" align=center> <span>
                                    <img alt="image" class="img" src="img/logo.png" width="80%" height="80%"/>
                                </span>
                          <br>
                          <br>
<!--                          <span  style="color: #233646 ;  text-shadow: 2px 2px 2px blue;"class="nav-label"><h2><b>Taller Full Service</b></h2></span>-->

                            </div>
                      <h3>Bienvenido</h3>
         
            <form role="form" method="post" action="../back/controller/usuario_login.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar Sesion</button>

               
            </form>
          
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>



</html>
