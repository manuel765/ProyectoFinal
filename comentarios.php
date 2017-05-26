<?php
if(isset($_POST['comentario'])){
	$con= mysqli_connect('localhost','root',"","redsocial");
	$t_comentario=$_POST['comentario'];
	$hoy = getdate();
	print_r ($hoy);
	$fecha="".$hoy['year']."-".$hoy['mon']."-".$hoy['mday']." ".($hoy['hours']-7).":".$hoy['minutes'].":".$hoy['seconds']."";
	echo $fecha;
	$id_publicacion=$_POST['id_publicacion'];
	$id_usuario=$_POST['id_usuario'];
	$insertar = "INSERT INTO comentarios(t_comentario,id_publicacion,id_usuario,f_comentario) VALUES ('$t_comentario','$id_publicacion','$id_usuario','$fecha')";
	$resultado= mysqli_query($con, $insertar);
}
?>