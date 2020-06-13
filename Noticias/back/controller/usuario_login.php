<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Somos los amish del software  \\
include_once realpath('../facade/UsuariosFacade.php');

//$user = 'edward22069@gmail.com';
//$pass = 'Soporte2014';
$user = $_POST['correo'];
$pass = $_POST['contrasena'];
$pass=md5($pass);



 $list=UsuariosFacade::login_user($user,$pass);
// var_dump($list);
  if($list!=null){
        foreach ($list as $obj => $Usuarios) {	
	
	  $id_user=$Usuarios->getidusuarios();
          $nomb=$Usuarios->getnombre();
        }

 
    session_start();   

//    echo $nomb;

   $_SESSION['idusuarios'] = $id_user; 
   $_SESSION['nombre'] = $nomb; 
  
 

    echo '<script language="javascript">'
   . 'window.location="../../front/index.php"</script>';

    
}else{
////    if($cargo>1){
        echo '<script language="javascript">'
   . 'window.location="../../front/login.php"</script>';

////    }else{
////       echo '<script language="javascript">'
////   . 'window.location="../../../front/login_Adm.html"</script>';
//// 
////    }
//  
//    
}

