<!DOCTYPE html>
<html>
<!--              -------Creado por-------               -->
<!--             \(x.x )/ Anarchy \( x.x)/               -->
<!--              ------------------------               -->
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<!--//    Cuando uses Anarchy, Georgie, tú también flotarás  \\                  -->
  <div class="wrapper wrapper-content animated fadeInRight">
     
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title"> 
                         <div style="text-align: center; color: white" >
            <h1><b>Lista de Usuarios</b></h1>
                        
                        </div>
                        <div class="ibox-tools">

                            <!--     <button type="button" class="btn btn-primary" data-toggle="modal" 
                                         data-target="#myModal5" data-backdrop="static" data-keyboard="false">
                                          + Agregar
                                      </button>-->

                            <button type="button" class="btn btn-primary" onclick="Usuario_inserta()">
                                + Agregar
                            </button>

                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped" >
                           <!-- <table class="table table-striped table-bordered table-hover dataTables-example" >-->
                                <thead>
                                    <tr>
                                        <th style=" color:#FFFFFF; background-color: #616161  !important">Id</th>
                                        <th style=" color:#FFFFFF; background-color: #616161  !important">Nombre</th>
                                        <th style=" color:#FFFFFF; background-color: #616161  !important">Correo</th>
                                       
                                       
                                       <th style=" color:#FFFFFF; background-color: #616161  !important">Estado</th>
                                      
                                       <th  style=" color:#FFFFFF; background-color: #616161  !important"><i class="fa fa-eye"></i></th>
                                        <th  style=" color:#FFFFFF; background-color: #616161  !important"><i class="fa fa-trash"></i></th>
                                <!--        <th style=" color:#FFFFFF; background-color: #616161  !important"><i class="fa fa-trash"></i></th>-->
                                      
                                      
                                    </tr>
                                </thead>
                                <tbody id="UsuariosList_2">

                                </tbody>
                   
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Registrar Empleado -->
    <div class="modal  inmodal fade" id="myModalDetalles" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg mdialTamanio">
            <div id="menumodal1" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" style="color: white  ; text-shadow: 5px 5px 5px #aaa;">Detalles Noticia</h4>

                </div>
                <div class="modal-body"> <!-- Abrri Contenio-->
                    <div>
                         <form method="post" enctype="multipart/form-data" role="form" id="TendenciasUpdate">
                            <div class="panel panel-default">
              <!--<div align=center class="panel-heading"><h3 class="panel-title">Registrar tendencias</h3></div>-->
              <div align=center class="panel-body">
                 
                    
                      <div class="row">
                          <div class="col-md-6">
                                      
                              <div class="form-group" style="display: none">
                          <label for="Inputid_ten">id_ten</label>
                          <input type="text" name="id_ten" class="form-control" id="Inputid_ten" placeholder="titulo_ten">
                       </div>
                              
                      <div class="form-group">
                          <label for="Inputtitulo_ten">titulo</label>
                          <input type="text" name="titulo_ten" class="form-control" id="Inputtitulo_ten" placeholder="titulo_ten">
                       </div>
                      
                                 
<!--                      <div class="form-group">
                          <label for="Inputprioridad_ten">prioridad_ten</label>
                     
                          <select class="form-control" id="Inputprioridad_ten" name="prioridad_ten">
                              <option value="1" >Alta</option>                                               
                              <option value="2" >Media</option>                                               
                          </select>     
                       </div>-->
                        
                                 <div class="form-group">
                                <label for="Inputfoto">Foto</label>
                                <input id="imagen2" name="imagen2" class="form-control" type="file" disabled>
                            </div>
                      
                          </div>
                          <div class="col-md-6">
<!--                                  <div class="form-group">
                          <label for="Inputtipo_ten">tipo_ten</label>
                                <select  name="tipo_ten" class="form-control" id="Inputtipo_ten">
                                  <option value="1" >Noticias</option>                                            
                                 <option value="2" >Blog</option>   
                             </select>
                         
                       </div>-->
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
                          <textarea type="text" name="descrip_ten" class="form-control" id="Inputdescrip_ten"  rows="4" placeholder="descrip_ten"></textarea>
                       </div> 
               
                       <div class="form-group">
                          <label for="Inputdescrip_ten">Link</label>
                          <textarea type="text" name="id_link" class="form-control" id="Inputid_link"  rows="2" placeholder="Pegue el link" disabled></textarea>
                       </div> 
                  
                   <div align=center class="panel-body" style="background-color: gainsboro ; box-shadow: 0.5px 0.5px 0.5px 0.5px #999;">
                                                <br>
                                                <br>
                                                <span>
                                                    <img alt="image" id="imgfoto" class="img" src="" width="80%" height="80%"/>
                                                </span>
                                            </div>
                   
<!--                        <button type="button" class="btn btn-primary" onclick="registraraPersona()">Registrar</button>-->
                
               </div><!-- panel-body -->
          </div> <!-- panel -->



                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="Noticia_Actualizar()">Actualizar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                        </div>
          
             </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- finaliza modal de Empleado Registrar-->

    <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

<script src="js/funciones.js"></script>
<script src="js/Ajax.js "></script>
<script src="js/ViewManager.js "></script>
<script src="js/HtmlBuilder.js "></script>



    <script>
        
             
     $( function() {
    $("#id_categoria").change( function() {
         if ($(this).val() === "0") {
            $("#Inputid_link").prop("disabled", true);
            $("#imagen2").prop("disabled", true);
            document.getElementById('Inputid_link').value="";
            $("#Inputid_link").value="";
            document.getElementById('imagen2').value="";
            $("#imagen").value="";
            
        }if ($(this).val() === "1") {
            $("#Inputid_link").prop("disabled", true);
            $("#imagen2").prop("disabled", false);
//            document.getElementById('Inputid_link').value="";
//            $("#Inputid_link").value="";
        } if ($(this).val() === "2")  {
            $("#Inputid_link").prop("disabled", false);
            $("#imagen2").prop("disabled", true);
//             document.getElementById('imagen').value="";
//            $("#imagen").value="";
        }
    });
});
        
        
        
        
        
        function mostrarEliminar(empresa) {

//    swal({
//        title: "Estas Seguri de Eliminar este Item?",
//        text: "Despues de Eliminado no Se podr recuerar!",
//        type: "warning",
//        showCancelButton: true,
//        confirmButtonColor: "#DD6B55",
//        confirmButtonText: "Si , Borrar!",
//        closeOnConfirm: false
//    }, function () {
//          $.get('../back/controller/Noticias_eliminar.php', {'empresa': empresa}, function (depa) {
//                            });
//                            Noticias_Listar();
//        swal("Borrado!", "La Noticia ha sido eliminada.", "success");
//    });
//          
//                

        }

  function mostrarActualizar(id){
//            cargarNoticia(id);
//            $('#myModalDetalles').addClass(' data-backdrop="static" data-keyboard="false"');
//            $('#myModalDetalles').modal({show: true});
    };  
    
    
       function cargarNoticia(empresa) {
//              console.log(empresa);
            //  document.getElementById("ClientesReset").reset();
            //  $("#ClientesReset").reset();

            $.get('../back/controller/Noticias_listar_id.php', {'empresa': empresa}, function (depa) {

                depa = JSON.parse(depa);


                $("#Inputid_ten").val(depa[1].id_ten);
                $("#Inputtitulo_ten").val(depa[1].titulo_ten);
                $("#Inputpublicado_ten").val(depa[1].publicado_ten);
                $("#Inputdescrip_ten").val(depa[1].descrip_ten);
                $("#imgfoto").attr("src","../../tendencias/"+depa[1].tipo_ten);
                


            });
            
//            acentos();
        }
        
//        function acentos() {
//            
//       var $cadena=document.getElementById("Inputdescrip_ten");
//   $search = explode(",","á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ,Ã¡,Ã©,Ã­,Ã³,Ãº,Ã±,ÃÃ¡,ÃÃ©,ÃÃ­,ÃÃ³,ÃÃº,ÃÃ±,Ã“,Ã ,Ã‰,Ã ,Ãš,â€œ,â€ ,Â¿,ü");
//   $replace = explode(",","á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ,á,é,í,ó,ú,ñ,Á,É,Í,Ó,Ú,Ñ,Ó,Á,É,Í,Ú,\",\",¿,&uuml;");
//   $cadena= str_replace($search, $replace, $cadena);
//
//   echo $cadena;
//}

  function Noticia_Actualizar() {
      
            var formData = new FormData(document.getElementById('TendenciasUpdate'));
            formData.append('action', 'InsertNew');

            EnviarPost(formData, '../back/controller/Noticias_update.php', function (result, state) {
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



     function aceptarPersona(){
  
   $('#myModalDetalles').modal('hide');

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
//                         $('#myModalDetalles').modal({show: false});
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