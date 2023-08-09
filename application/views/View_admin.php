<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
 
<head>
    
  <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="https://scontent.flpb2-2.fna.fbcdn.net/v/t39.30808-6/272996312_499037474988407_2182029457382273992_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Ez2dulCFlzsAX8s7eCR&_nc_ht=scontent.flpb2-2.fna&oh=00_AfCdFiMhMBQ0jawFZ9aMrFaR4riZXuvgq6eM1Qf4E5vqlA&oe=638D562D" alt="Logo" style="width:40px;">
  </a>
  <div class="container px-5">
  <a class="navbar-brand" href="<?php echo site_url("Ctrl_prueba");?>">Peligrosamente Humanos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <a class="nav-link" href="<?php echo site_url("Ctrl_admin");?>">Registrar Columnista</a>
        <a class="nav-link" href="<?php echo site_url("Ctrl_admin_2");?>">Registrar Editor</a>
      </ul>
    </div>
    
  </div>

</nav>

<body class="main-content">
<!-- Navegacion-->


<div class="rounded-3 py-5 px-4 px-md-5 mb-5">
  <div class="text-center mb-5">
    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
        <h1 class="fw-bolder">Registrar un Columnista</h1>
    </div>
  <div class="row gx-5 justify-content-center">
    <div class="col-lg-8 col-xl-6">
      <div class="container">
        
        <!--ID-->
        <input type="hidden" class="form-control" id="txb_id_usuario_col">
         <!--ID_tipo-->
<div class="form-group">
  <label for="txb_usuario">Usuario</label>
  <input type="text" class="form-control" id="txb_usuario">
</div>

<div class="form-group">
  <label for="txb_password">Password</label>
  <input type="text" class="form-control" id="txb_password">
</div>
<div class="form-group">
  <label for="txb_not_publi">Noticias_publicadas</label>
  <input type="text" class="form-control" id="txb_not_publi">
</div>

<div class="form-group">
  <label for="txb_fecha_c">Fecha Creacion</label>
  <input type="text" class="form-control" id="txb_fecha_c">
</div>

<div class="form-group">
  <label for="txb_columnista">id_columnista</label>
  <input type="text" class="form-control" id="txb_columnista" placeholder="Soy yo">
</div>

<div class="form-group">
  <label for="txb_uadmin">id usuario adm</label>
  <input type="text" class="form-control" id="txb_uadmin">
</div>

<button class="btn btn-outline-success btn-lg" onclick="boton_solo()">Cargar</button>

        
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
        </div>
    </div>
<!-- ======= -->
        <div class="form-group">
            <label for="txb_mes"><strong>Buscar por nombre de usuario</strong></label>
        <div class="form-group">
              
            <label for="lang">Buscar por nombre</label>
              
            <input type="text" class="form-control" id="txb_name_user">
            <button class="btn btn-outline-success btn-lg" onclick="Buscar()">Busquemos</button>
        </div>
    </div>
<br>
<br> 
<div class="container" style="display;" id="tabla_columnistas">
</div>    



<script>  
function registrar_columnista(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_admin/registrar");?>",
    data:{
      vusuario :$("#txb_usuario").val(),
      vpassword :$("#txb_password").val(),
      vnot_pu :$("#txb_not_publi").val(),
      vfecha_c :$("#txb_fecha_c").val(),
      vcolumnista :$("#txb_columnista").val(),
      vadmin :$("#txb_uadmin").val()
      
    },
    success: function(){
      limpiar_campos();
    },
});
}

function limpiar_campos(){
  $("#txb_usuario").val("");
  $("#txb_password").val("");
  $("#txb_not_publi").val("");
  $("#txb_fecha_c").val("");  
  $("#txb_columnista").val("");
  $("#txb_uadmin").val("");
}

function modificar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_admin/modificar");?>",
    data:{
      vid_column :$("#txb_id_usuario_col").val(),
      vusuario :$("#txb_usuario").val(),
      vpassword :$("#txb_password").val(),
      vnot_pu :$("#txb_not_publi").val(),
      vfecha_c :$("#txb_fecha_c").val(),
      vcolumnista :$("#txb_columnista").val(),
      vadmin :$("#txb_uadmin").val()   
    },
    success: function(){
      limpiar_campos();
      listar_columistas();
    },
});
}

function editar(id_usuario,user,password,noti_publi,fecha_creacion,id_columnista,id_usuario_adm){
  $("#txb_id_usuario_col").val(id_usuario),
  $("#txb_usuario").val(user);
  $("#txb_password").val(password);
  $("#txb_not_publi").val(noti_publi);
  $("#txb_fecha_c").val(fecha_creacion);  
  $("#txb_columnista").val(id_columnista);
  $("#txb_uadmin").val(id_usuario_adm);
}

function boton_solo(){
  var id_usuario = $("#txb_id_usuario_col").val();
        if (id_usuario == 0) {
            registrar_columnista();
        }else{
          modificar();
        }
}

listar_columistas();

function listar_columistas(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_admin/tabla_columinstas");?>",
    data:{
      
    },
    success: function(columnistas){
      crear_tabla_columnistas(columnistas);
    },
    dataType:'json'
});
}

function crear_tabla_columnistas(columnistas){  
    if(columnistas.length >0){
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";      
      tabla_dinamica+="<tr>";
      tabla_dinamica+="<th>Usuario</th>";
      tabla_dinamica+="<th>Noticias Publicadas</th>";      
      tabla_dinamica+="<th>Fecha de Registro</th>";
      tabla_dinamica+="<th>id Columnista</th>";
      tabla_dinamica+="<th>ACCIONES</th>";  
      tabla_dinamica+="<th></th>"; 
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<columnistas.length;i++){
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+columnistas[i].user+"</td>";
        tabla_dinamica+="<td>"+columnistas[i].noti_publi+"</td>";        
        tabla_dinamica+="<td>"+columnistas[i].fecha_creacion+"</td>";
        tabla_dinamica+="<td>"+columnistas[i].id_columnista+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('"+
        columnistas[i].id_usuario+
        "','"+columnistas[i].user+
        "','"+columnistas[i].password+
        "','"+columnistas[i].noti_publi +
        "','"+columnistas[i].fecha_creacion+
        "','"+columnistas[i].id_columnista+
        "','"+columnistas[i].id_usuario_adm+
        "')\">MODIFICAR</button>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"eliminar('"+columnistas[i].id_usuario+"')\">ELIMINAR</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_columnistas").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_columnistas").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}



function eliminar(id_usuario){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_admin/eliminar_registro");?>",
    data:{
      vid_usuario :id_usuario
    },
    success: function(){
      limpiar_campos();
      listar_columnistas();
     
    },

});

}


function Buscar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_admin/buscar");?>",
    data:{
      vname_user:$("#txb_name_user").val()
    },
    success: function(columnistas){
      crear_tabla_columnistas(columnistas);
      
    },
    dataType:'json'
});


}



</script>
<style>

    
</style>

</body>
</html>






