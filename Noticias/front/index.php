<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['idusuarios']) || $_SESSION['idusuarios'] == null || $_SESSION['idusuarios'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="login.php"
                </script>';
}
//session_destroy(); //  window.location="login.php"

$nombre = $_SESSION['nombre'];
$id_user = $_SESSION['idusuarios'];

//?>
<html lang="es" dir="ltr">


    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <title>SNTP | NortCoding</title>


<link rel="shortcut icon" type="image/png" href="img/logo.png"/>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">




<script type="text/javascript"  charset="UTF-8"></script></head>
    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                           <li class="nav-header">
                      <div class="dropdown profile-element" align=center> <span>
                              <img alt="image" class="img" src="img/logo.png" width="100" height="100"/>
                                </span>


                            </div>
                 <div class="logo-element">
                                SCA
                            </div>
                </li>

                        
                        <li>
                    <a onclick="Persona_Listar()"><i class="fa fa-laptop"></i> <span class="nav-label">Perfil</span></a>
                </li>
                        <li>
                    <a onclick="Usuario_Listar()"><i class="fa fa-laptop"></i> <span class="nav-label">Usuarios Sistema</span></a>
                </li>
                        <li>
                    <a onclick="Noticias_Listar()"><i class="fa fa-laptop"></i> <span class="nav-label">Noticias</span></a>
                </li>
               
                        
                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                        </div>



                        <ul class="nav navbar-top-links navbar-right">

                             <li>
                            <span class="m-r-sm text-muted welcome-message"> 
                                <label style="color: #ffffff" ><?php echo $nombre; ?></label></span>
                     
<!--                                <input type="text" name="valor_id" class="form-control" id="valor_id" value="">-->
                        </li>

                        

                            <li>
                                <a href="login.php">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>

                            </li>
                        </ul>

                    </nav>

                </div>







                <div class="wrapper wrapper-content animated fadeInRight"  >



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins"><!------------inicio caja--------------->

                           
                                <div id="mostrarcontenido"  > <!-------------Inicio pintar --------------------->

                  
                                </div><!-------------fin  pintar --------------------->




                            </div>  <!----------------fin caja ---------------->
                        </div>
                    </div>
                </div>
                <div style="color: black" class="footer">
                    <div class="pull-right">
                        Sistema de Noticias Pescadero <strong>NORTCODING</strong> 2019.
                    </div>
                    <div>
                        <strong>Copyright</strong> NortCoding &copy; 2016-2019
                    </div>
                </div>

                <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated flipInY">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Actualizar Noticias</h4>

                            </div>

                            <div align=center class="panel-body">

                                <!-- contenido formulario  -->
                                
                            </div><!-- panel-body -->






                        </div>
                    </div>
                </div>


   

            </div>
        </div>


        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

    

        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        
<script src="js/funciones.js"></script>
<script src="js/Ajax.js "></script>
<script src="js/ViewManager.js "></script>
<script src="js/HtmlBuilder.js "></script>

        <!-- Pon tus js aquí -->    <!-- jQuery library -->

        <!-- Latest compiled JavaScript -->


        <!-- Carga de datos inicial -->
   

  
      
        
    </body>

    <script>
        
//     
        
            $(document).ready(function(){
            
       Noticias_Listar();
      

        });  
    </script>

    <!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 03:04:35 GMT -->
</html>
