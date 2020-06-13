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
                  <form method="post" enctype="multipart/form-data" role="form" id="TendenciasInsert">
                 
                      <input style="display: none" type="text" name="usuarios_idusuarios" class="form-control" id="usuarios_idusuarios" value="<?php echo $id_user ?>">    
                   
                      
                      <div class="row">
                          <div class="col-md-6">
                                      
                      <div class="form-group">
                          <label for="Inputtitulo_ten">titulo</label>
                          <input type="text" name="titulo_ten" class="form-control" id="Inputtitulo_ten" placeholder="titulo_ten">
                       </div>
                      
                                 
                      <div class="form-group">
                          <label for="Inputprioridad_ten">prioridad_ten</label>
                     
                          <select class="form-control" id="Inputprioridad_ten" name="prioridad_ten">
                              <option value="1" >Alta</option>                                               
                              <option value="2" >Media</option>                                               
                          </select>     
                       </div>
                        
                                <div class="form-group">
                                <label for="Inputfoto">Foto</label>
                                <input id="imagen" name="imagen" class="form-control" type="file" disabled>
                            </div>
                      
                          </div>
                          <div class="col-md-6">
                                  <div class="form-group">
                          <label for="Inputtipo_ten">tipo</label>
                                <select  name="tipo_ten" class="form-control" id="Inputtipo_ten">
                                  <option value="1" >Noticias</option>                                            
                                 <option value="2" >Blog</option>   
                             </select>
                         
                       </div>
                      <div class="form-group">
                          <label for="Inputpublicado_ten">Fecha</label>
                          <input type="date" name="publicado_ten" class="form-control" id="Inputpublicado_ten" placeholder="publicado_ten">
                       </div>
                              
                               <div class="form-group">
                          <label for="Inputprioridad_ten">Tipo Tendencia</label>
                     
                          <select class="form-control" name="id_categoria" id="id_categoria" >
                              <option value="0" >Seleccione</option>                                               
                              <option value="1" >Imagen</option>                                               
                              <option value="2" >Url</option>                                               
                          </select>     
                       </div>
                              
                          </div>
                          
                         
                      </div>
              
                         <div class="form-group">
                          <label for="Inputdescrip_ten">Descripcion</label>
                          <textarea type="text" name="descrip_ten" class="form-control" id="Inputdescrip_ten"  rows="3" placeholder="Descripcion"></textarea>
                       </div> 
                         <div class="form-group">
                          <label for="Inputdescrip_ten">Link</label>
                          <textarea type="text" name="id_link" class="form-control" id="Inputid_link"  rows="2" placeholder="Pegue el link" disabled></textarea>
                       </div> 
               
                   
                        <button type="button" class="btn btn-primary" onclick="registraraPersona()">Registrar</button>
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
            var formData = new FormData(document.getElementById('TendenciasInsert'));
            formData.append('action', 'InsertNew');

            EnviarPost(formData, '../back/controller/Noticias_inser.php', function (result, state) {
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
      
  
        var url1 = "../back/controller/Noticias_inser.php";
      //  console.log($("#PersonaInsert").serialize());
        $.ajax({                        
           type: "POST",                 
           url: url1,                     
           data: $("#TendenciasInsert").serialize(), 
       
                 
           success: function(data){
               
//             console.log(data);
//          data=parseInt(data) ;    
          if(data==1){
                   
              //     console.log("sirve");
                   
              Noticias_Listar();
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
                      Noticias_Listar();
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