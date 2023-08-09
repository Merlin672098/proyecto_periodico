<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Subir y descargar Archivo</h3>
<form action="<?php echo base_url();?>nose/subirArchivo" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Titulo</td>
			<td><input type="text" name="titImagen" class="form-control"></td>
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
</form>

<a href="uploads/">Descargar</a>
<a href="<?php echo base_url();?>nose/downloads/<?php echo $archivo;?>">Descargar</a>

<script>


</script>
</body>
</html>


