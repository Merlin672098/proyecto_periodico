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
    <img src="images/logo.jpg" alt="Logo" style="width:40px;">
  </a>
  <div class="container px-5">
  <a class="navbar-brand" href="<?php echo site_url("Ctrl_bienvenida/index");?>">Peligrosamente Humanos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <a class="nav-link" href="<?php echo site_url("Ctrl_prueba/index");?>">INICIO</a>
        
    </div>
    
  </div>

</nav>

<input type="hidden" class="form-control" id="txb_id_noticia">
      
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
              <select name="tema" id="txb_ttema" class="custom-select">
              <option value="1">Deportes</option>
              <option value="2">Politica</option>
              <option value="3">Juegos</option>
              <option value="4">Tendencia</option>
              <option value="5">Salud</option>
              <option value="6">Economia</option>
              <option value="7">Mundo</option>
              <option value="8">Tecnologia</option>
            </select>
            
            <button class="btn btn-outline-success" onclick="Buscar()">Busquemos</button>
        
        </div>
        <div class="form-group">
            <label for="txb_mes"><strong>Buscar por Autor</strong></label>
        <div class="form-group">
              
              
            <input type="text" class="form-control" id="txb_name_user">
            <br>
            <button class="btn btn-outline-success" onclick="Buscar_2()">Busquemos</button>
        </div>
    </div>        
<br>
<br> 
<div class="container" style="display;" id="tabla_noticias">
</div>    


<script>  
function modificar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_editor/modificar");?>",
    data:{
      vid_noticia :$("#txb_id_noticia").val(),
      vestado:$("#txb_estado").val()   
    },
    success: function(){
      listar_noticias();
    },
});
}

function editar(id_noticia,id_estad){
  $("#txb_id_noticia").val(id_noticia),
  $("#txb_estado").val(id_estad);
}


listar_noticias();

function listar_noticias(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_editor/tabla_noticias");?>",
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
      tabla_dinamica+="<th>Documento</th>";
      tabla_dinamica+="<th>FECHA</th>";
      tabla_dinamica+="<th>AUTOR</th>";
      tabla_dinamica+="<th>TEMA</th>";
      tabla_dinamica+="<th>Estado</th>";
      
        
      tabla_dinamica+="<th></th>"; 
      tabla_dinamica+="<th>ACCIONES</th>";
      tabla_dinamica+="<th></th>";
      
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<noticias.length;i++){
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+noticias[i].titulo+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<a href='uploads/' download='.*'>Download</a>";
        tabla_dinamica+="<td>"+noticias[i].fecha_publi+"</td>";
        tabla_dinamica+="<td>"+noticias[i].user+"</td>";
        tabla_dinamica+="<td>"+noticias[i].tipo_tema+"</td>";
        tabla_dinamica+="<td>"+noticias[i].descripcion+"</td>";
        

        
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-primary' onclick=\"editar('" 
        +noticias[i].id_noticia+
        "','"+noticias[i].id_estad+"')\">Seleccionar</button>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<label for='lang'></label><select name='tema' id='txb_estado' class='custom-select'><option value='1'>Revision</option><option value='2'>Revisado</option></select>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success' onclick='modificar()'>Cargar</button>";
        
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


function Buscar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_editor/buscar");?>",
    data:{
      vtipo_tema:$("#txb_ttema").val()
    },
    success: function(noticias){
      crear_tabla_noticias(noticias);
      
    },
    dataType:'json'
});


}


function Buscar_2(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_editor/buscar_2");?>",
    data:{
      vname_user:$("#txb_name_user").val()
    },
    success: function(noticias){
      crear_tabla_noticias(noticias);
      
    },
    dataType:'json'
});


}






</script>
<style>


</style>

</body>
  </html>









