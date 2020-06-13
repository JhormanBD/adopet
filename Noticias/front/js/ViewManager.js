/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\

var rutaBack = '../back/controller/Router.php';

/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mÃ­nimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// ARCHIVOS \\\\\\\\\\
function preArchivosInsert(idForm){
     //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
     formData["ruta"]="ArchivosInsert";
 	enviar(formData, rutaBack ,postArchivosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postArchivosInsert(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Archivos registrado con Ã©xito");
                     }else{
                        alert("Hubo un errror en la inserciÃ³n ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preArchivosList(container){
     //Solicite informaciÃ³n del servidor
     cargaContenido(container,'ArchivosList.html'); 
     var formData = {};
     formData["ruta"]="ArchivosList";
 	enviar(formData, rutaBack ,postArchivosList); 
}

 function postArchivosList(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length; i++) {   
                var Archivos = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("ArchivosList").appendChild(createTR(Archivos));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// TENDENCIAS \\\\\\\\\\
function preTendenciasInsert(idForm){
     //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
     formData["ruta"]="TendenciasInsert";
 	enviar(formData, rutaBack ,postTendenciasInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postTendenciasInsert(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Tendencias registrado con Ã©xito");
                     }else{
                        alert("Hubo un errror en la inserciÃ³n ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preTendenciasList(container){
     //Solicite informaciÃ³n del servidor
     cargaContenido(container,'TendenciasList.html'); 
     var formData = {};
     formData["ruta"]="TendenciasList";
 	enviar(formData, rutaBack ,postTendenciasList); 
}

 function postTendenciasList(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length; i++) {   
                var Tendencias = json[i];
                Tendencias.updateHrefB = 'mostrarActualizar("' + Tendencias.id_ten + '");';
                Tendencias.deleteHrefB = 'mostrarEliminar("' + Tendencias.id_ten + '");';
                //----------------- Para una tabla -----------------------
                document.getElementById("TendenciasList_2").appendChild(createTR(Tendencias));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// TENDENCIAS_HAS_USUARIOS \\\\\\\\\\
function preTendencias_has_usuariosInsert(idForm){
     //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
     formData["ruta"]="Tendencias_has_usuariosInsert";
 	enviar(formData, rutaBack ,postTendencias_has_usuariosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postTendencias_has_usuariosInsert(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Tendencias_has_usuarios registrado con Ã©xito");
                     }else{
                        alert("Hubo un errror en la inserciÃ³n ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preTendencias_has_usuariosList(container){
     //Solicite informaciÃ³n del servidor
     cargaContenido(container,'Tendencias_has_usuariosList.html'); 
     var formData = {};
     formData["ruta"]="Tendencias_has_usuariosList";
 	enviar(formData, rutaBack ,postTendencias_has_usuariosList); 
}

 function postTendencias_has_usuariosList(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length; i++) {   
                var Tendencias_has_usuarios = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("Tendencias_has_usuariosList").appendChild(createTR(Tendencias_has_usuarios));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

////////// USUARIOS \\\\\\\\\\
function preUsuariosInsert(idForm){
     //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
     formData["ruta"]="UsuariosInsert";
 	enviar(formData, rutaBack ,postUsuariosInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postUsuariosInsert(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Usuarios registrado con Ã©xito");
                     }else{
                        alert("Hubo un errror en la inserciÃ³n ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preUsuariosList(container){
     //Solicite informaciÃ³n del servidor
     cargaContenido(container,'UsuariosList.html'); 
     var formData = {};
     formData["ruta"]="UsuariosList";
 	enviar(formData, rutaBack ,postUsuariosList); 
}

 function postUsuariosList(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length; i++) {   
                var Usuarios = json[i];
                 Usuarios.updateHrefB = 'mostrarActualizar("' + Usuarios.idusuarios + '");';
                Usuarios.deleteHrefB = 'mostrarEliminar("' + Usuarios.idusuarios + '");';
                //----------------- Para una tabla -----------------------
                document.getElementById("UsuariosList_2").appendChild(createTR(Usuarios));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That`s all folks!