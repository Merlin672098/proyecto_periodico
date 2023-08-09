<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
 
<head>
    
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<!-- Navegacion-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="https://scontent.flpb2-2.fna.fbcdn.net/v/t39.30808-6/272996312_499037474988407_2182029457382273992_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Ez2dulCFlzsAX8s7eCR&_nc_ht=scontent.flpb2-2.fna&oh=00_AfCdFiMhMBQ0jawFZ9aMrFaR4riZXuvgq6eM1Qf4E5vqlA&oe=638D562D" alt="Logo" style="width:40px;">
  </a>
  <div class="container px-5">
  <a class="navbar-brand" href="<?php echo site_url("Ctrl_bienvenida/index");?>">Peligrosamente Humanos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <a class="nav-link" href="<?php echo site_url("Ctrl_not_user/index");?>">Noticias</a>
        
      </ul>
    </div>
    
  </div>

</nav>


<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
  <div class="text-center mb-5">
    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
    <h1 class="fw-bolder">SUBIR UNA NOTICIA</h1>
    <h1 class="fw-bolder">para el columnista</h1>
  </div>
  <div class="row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-6">
      <div class="container">
        <!--ID-->
        <input type="hidden" class="form-control" id="txb_id_noticia">
         <!--ID_tipo-->
<div class="form-group">
  <label for="txb_titular">Titular</label>
  <input type="text" class="form-control" id="txb_titular">
</div>
    

<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nombre archivo</td>
			<td><input type="text" id="txb_nom_archiv" class="form-control"></td>
		</tr>
		<tr>
			<td>Imagen</td>
			<td>
				<input type="file" name="fileImagen" class="form-control">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Guardar"></td>
		</tr>
	</table>


  <a href="">Descargar</a>     

  



<div class="form-group">
  <label for="txb_fecha_p">Fecha Publicacion</label>
  <input type="text" class="form-control" id="txb_fecha_p">
</div>

<div class="form-group">
  <label for="txb_columnista">Autor</label>
  <input type="text" class="form-control" id="txb_columnista" placeholder="Soy yo">
</div>
<div class="form-group">
  <label for="txb_editor">Editor</label>
  <input type="text" class="form-control" id="txb_editor" placeholder="Soy yo">
</div>

<div class="form-group">
              
            <label for="lang">Añadir tema</label>
              <select name="tema" id="txb_tema">
              <option value="1">Deportes</option>
              <option value="2">Politica</option>
              <option value="3">Juegos</option>
              <option value="4">Tendencia</option>
              <option value="5">Salud</option>
              <option value="6">Economia</option>
              <option value="7">Mundo</option>
              <option value="8">Tecnologia</option>
            </select>
            

        </div>

<div class="form-group">
              
            <label for="lang">Seleccionar Estado</label>
              <select name="tema" id="txb_estado">
              <option value="1">Revision</option>
              <option value="2">Revisado</option>
              
            </select>
</div>
<button class="btn btn-outline-success btn-lg" onclick="boton_solo()">Cargar</button>
</form>
<br>
<br></br> 
<br>
          <br>
        </form>
      </div>
    </div>      
<!-- ======= -->
    <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FILTRAR</h3>
              </div> 
</div>
<!-- ======= -->
    <div class="form-group">
            <label for="txb_mes"><strong>Buscar por tema</strong></label>
            
          </div>
        </form>
        <div class="form-group">
              
            <label for="lang">Buscar por tema</label>
              <select name="tema" id="txb_ttema">
              <option value="1">Deportes</option>
              <option value="2">Politica</option>
              <option value="3">Juegos</option>
              <option value="4">Tendencia</option>
              <option value="5">Salud</option>
              <option value="6">Economia</option>
              <option value="7">Mundo</option>
              <option value="8">Tecnologia</option>
            </select>
            <input type="submit" onclick="Buscar()" value="Buscar"/>

        </div>
<br>
<br> 

<div class="container" style="display;" id="tabla_noticias">
</div>    

<script>  
function guardar_noticia(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_not_user/guardar");?>",
    data:{
      vtitular :$("#txb_titular").val(),
      vfecha_p :$("#txb_fecha_p").val(),
      vcolumnista :$("#txb_columnista").val(),
      veditor :$("#txb_editor").val(),
      vtema :$("#txb_tema").val(),
      vnombre_archiv :$("#txb_nom_archiv").val(),
      vestado:$("#txb_estado").val() 
    },
    success: function(){
      limpiar_campos();
      listar_noticias();
    },
});
}



function limpiar_campos(){
  $("#txb_titular").val("");
  $("#txb_fecha_p").val("");  
  $("#txb_columnista").val("");
  $("#txb_editor").val("");
  $("#txb_tema").val("");
  $("#txb_estado").val("");
}

function modificar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_not_user/modificar");?>",
    data:{
      vid_noticia :$("#txb_id_noticia").val(),
      vtitular :$("#txb_titular").val(),
      vfecha_p :$("#txb_fecha_p").val(),
      vcolumnista :$("#txb_columnista").val(),
      veditor :$("#txb_editor").val(),
      vtema :$("#txb_tema").val(),
      vnombre_archiv :$("#txb_nom_archiv").val(),
      vestado:$("#txb_estado").val()  
       
    },
    success: function(){
      limpiar_campos();
      listar_noticias();
    },
});
}

function editar(id_noticia,titulo,nom_archivo,fecha_publi,id_usuario,id_usuario_e,id_tema,id_estad){
  $("#txb_id_noticia").val(id_noticia),
  $("#txb_titular").val(titulo);
  $("#txb_nom_archiv").val(nom_archivo);
  $("#txb_fecha_p").val(fecha_publi);  
  $("#txb_columnista").val(id_usuario);
  $("#txb_editor").val(id_usuario_e);
  $("#txb_tema").val(id_tema);
  $("#txb_estado").val(id_estad);
}


listar_noticias();

function listar_noticias(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_not_user/tabla_noticias");?>",
    data:{
      
    },
    success: function(noticias){
      crear_tabla_noticias(noticias);
    },
    dataType:'json'
});
}

function crear_tabla_noticias(noticias){  
    if(noticias.length >0){
      var tabla_dinamica="<table class='table table-hover'>";
      tabla_dinamica+="";      
      tabla_dinamica+="<tr>";
      tabla_dinamica+="<th>TITULAR</th>";
      tabla_dinamica+="<th>Doc</th>";
      tabla_dinamica+="<th>FECHA</th>";
      //tabla_dinamica+="<th>AUTOR</th>";
      tabla_dinamica+="<th>TEMA</th>";
      tabla_dinamica+="<th>Estado</th>";
      
      
      
      tabla_dinamica+="<th>ACCIONES</th>";  
      tabla_dinamica+="<th></th>"; 
      tabla_dinamica+="<th></th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<noticias.length;i++){
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+noticias[i].titulo+"</td>";
        tabla_dinamica+="<td>"+noticias[i].nom_archivo+"</td>";
        tabla_dinamica+="<td>"+noticias[i].fecha_publi+"</td>";
        //tabla_dinamica+="<td>"+noticias[i].user+"</td>";
        tabla_dinamica+="<td>"+noticias[i].tipo_tema+"</td>";
        tabla_dinamica+="<td>"+noticias[i].descripcion+"</td>";
        
        
        
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-danger ' onclick=\"editar('" 
        +noticias[i].id_noticia+
        "','"+noticias[i].titulo +
        "','"+noticias[i].nom_archivo+
        "','"+noticias[i].fecha_publi+
        "','"+noticias[i].id_usuario+
        "','"+noticias[i].id_usuario_e+
        "','"+noticias[i].id_tema+
        "','"+noticias[i].id_estad+"')\">MODIFICAR</button>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-danger ' onclick=\"eliminar('"+noticias[i].id_noticia+"')\">ELIMINAR</button>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<a href='uploads/' download='Acme Documentation (ver. 2.0.1).*'>Download</a>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_noticias").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_noticias").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}

function boton_solo(){
  var id_noticia = $("#txb_id_noticia").val();
        if (id_noticia == 0) {
            guardar_noticia();
        }else{
          modificar();
        }
}

function eliminar(id_noticia){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_not_user/eliminar_noticia");?>",
    data:{
      vid_noticia :id_noticia
    },
    success: function(){
      limpiar_campos();
      listar_noticias();
     
    },

});

}


function Buscar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_not_user/buscar");?>",
    data:{
      vtipo_tema:$("#txb_ttema").val()
    },
    success: function(noticias){
      crear_tabla_noticias(noticias);
      
    },
    dataType:'json'
});


}



</script>
</div>
</div>
</div>
</div>
</div>
<footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; 2022</div></div>                    
                </div>
            </div>
        </footer>
</body>
  </html>









