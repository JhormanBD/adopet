<!DOCTYPE html>
<?php
session_start();

//if (!isset($_SESSION['idusuarios']) || $_SESSION['idusuarios'] == null || $_SESSION['idusuarios'] == "") {
//    echo'<script type="text/javascript">
//                alert("Inicio de Sesion Requerido");
//                window.location="login.php"
//                </script>';
//}
//session_destroy(); //  window.location="login.php"

//$nombre = $_SESSION['nombre'];
$id_user = $_SESSION['idusuarios'];

//?>
<html>
<!--              -------Creado por-------               -->
<!--             \(x.x )/ Anarchy \( x.x)/               -->
<!--              ------------------------               -->
        <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<!--//    Cuando uses Anarchy, Georgie, tú también flotarás  \\                  -->
      <div>
          <div class="panel panel-default">
              <div align=center class="panel-heading"><h3 class="panel-title">Registrar tendencias</h3></div>
              <div align=center class="panel-body">
                  <form method="post" enctype="multipart/form-data" role="form" id="UsuariosInsert">
                 
                
                      <div class="form-group">
                          <label for="Inputnombre">nombre</label>
                          <input type="text" name="nombre" class="form-control" id="Inputnombre" placeholder="nombre">
                       </div>
                  
                      <div class="form-group">
                          <label for="Inputusuario">Correo</label>
                          <input type="email" name="usuario" class="form-control" id="Inputusuario" placeholder="Correo">
                 </div>
                      <div class="form-group">
                          <label for="Inputpass">Clave por defecto " Tejar123 "</label>
                          <!--<input type="text" name="pass" class="form-control" id="Inputpass" placeholder="pass">-->
                       </div>
                      
                   
                        <button type="button" class="btn btn-primary" onclick="registraraPersona2()">Registrar</button>
                        
                   </form>
               </div><!-- panel-body -->
          </div> <!-- panel -->
      </div>

    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
    
    
    <script>
     
     $( function() {
    $("#id_categoria").change( function() {
         if ($(this).val() === "0") {
            $("#Inputid_link").prop("disabled", true);
            document.getElementById('Inputid_link').value="";
            $("#Inputid_link").value="";
           
            $("#imagen").prop("disabled", true);
             document.getElementById('imagen').value="";
            $("#imagen").value="";
            
        }if ($(this).val() === "1") {
            $("#Inputid_link").prop("disabled", true);
            $("#imagen").prop("disabled", false);
            document.getElementById('Inputid_link').value="";
            $("#Inputid_link").value="";
        } if ($(this).val() === "2") {
            $("#Inputid_link").prop("disabled", false);
            $("#imagen").prop("disabled", true);
             document.getElementById('imagen').value="";
            $("#imagen").value="";
        }
    });
});
        
        
     function habilitar(){
      document.getElementById('actualizar').disabled=true;
      document.getElementById('editar').disabled=false;
     }   
        
        
        function registraraPersona() {
            var formData = new FormData(document.getElementById('UsuariosInsert'));
            formData.append('action', 'InsertNew');

            EnviarPost(formData, '../back/controller/Usuarios_insert.php', function (result, state) {
            });
        }

        function EnviarPost(formData, url, func) {
//            alert();
            var resul = null
            var state = null
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'html',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
//                    resul = result
//                    alert(resul);
//                    console.log(resul);
                    aceptarPersona();
                }
            });
        }
    </script>    
    
    
    
    
    
    
       <script>
   
    
    function registraraPersona2(){
      
  
        var url1 = "../back/controller/Usuarios_insert.php";
      //  console.log($("#PersonaInsert").serialize());
        $.ajax({                        
           type: "POST",                 
           url: url1,                     
           data: $("#UsuariosInsert").serialize(), 
       
                 
           success: function(data){
               
//             console.log(data);
//          data=parseInt(data) ;    
          if(data==1){
                   
              //     console.log("sirve");
                aceptarPersona();   
//              Usuario_List();
              // alert("true");
               }if (data==2){
                   errorPersona();
               }else{
//                  errorPersona();
               }
                          
           }
       });
   
};

     function aceptarPersona(){
  

       swal({
                        title: "Registro",
                        text: "Registro Exitoso!",
                        type: "success",
                       // showCancelButton: true,
                        confirmButtonColor: "#1ab394",
                        confirmButtonText: "Ok",
                       // cancelButtonText: "No, cancel plx!",
                      //   closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                          // alert('mySelect2'+mySelect2);
                        //  console.log("mySelect2");
                      Usuario_Listar();
                     //  swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } 
                        else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
   
};


     function errorPersona(){
  

       swal({
                        title: "Error",
                        text: "Complete los Campos!",
                        type: "error",
                       // showCancelButton: true,
                        confirmButtonColor: "#dd6b55",
                        confirmButtonText: "Ok",
                       // cancelButtonText: "No, cancel plx!",
                      //   closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                          // alert('mySelect2'+mySelect2);
                        //  console.log("mySelect2");
                    //  Persona_Listar();
                     //  swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } 
                        else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
   
};

     
      </script>


<!-- That`s all folks! -->
</html>