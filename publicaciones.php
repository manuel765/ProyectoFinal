<?php
$n=0;
$con= mysql_connect('localhost','root',"");
		mysql_select_db('redsocial',$con);
		$prin=mysql_query("SELECT * FROM publicacion");
		while($reg= mysql_fetch_array($prin)){
			$idusuario = $reg['id_usuario'];
			$publicacion=$reg['t_publicacion'];
			$fecha=$reg['f_publicacion'];
			$idpublicacion=$reg['id_publicacion'];
			$pub=utf8_encode($publicacion);
			$pub=json_encode($pub);
			$idusu=json_encode($idusuario);
			$date=json_encode($fecha);
			$idpub=json_encode($idpublicacion);
			echo $_GET[$n]=$idpub;
			echo $_GET[$n]=$idusu;
			echo $_GET[$n]=$date;
			echo $_GET[$n]=$pub;
			$n++;
		}
		$Nombre=$_POST['nombre'];
		echo $Nombre;
?>