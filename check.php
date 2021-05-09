<?php
    session_start();
    include "database.php";
    if(isset($_POST['correo']) && isset($_POST['contrasenia'])){

        $resultado=$conexion->query("SELECT * FROM usuario WHERE 
        correo='".$_POST['correo']."' 
        AND 
        contrasenia='".sha1($_POST['contrasenia'])."'")or die($conexion->error);
    
        if(mysqli_num_rows($resultado)>0){
            $datos_usuario=mysqli_fetch_row($resultado);
            $id=$datos_usuario[0];
			$nombre=$datos_usuario[1];
			$apellido = $datos_usuario[2];
			$cedula= $datos_usuario[3];
			$fecha_nacimiento= $datos_usuario[4];
			$genero= $datos_usuario[5];
			$prov= $datos_usuario[6];
			$ciu = $datos_usuario[7];
			$direccion = $datos_usuario[8];
			$codigo = $datos_usuario[9];
			$telefono_fijo = $datos_usuario[10];
			$telefono_movil=$datos_usuario[11];
			$profesion=$datos_usuario[12];
			$correo=$datos_usuario[13];
            $_SESSION['datos_login']=array(
				'id'=>$id,
                'nombre'=>$nombre,
				'apellido'=>$apellido,
				'cedula'=>$cedula,
				'fecha_nacimiento'=>$fecha_nacimiento,
				'genero'=>$genero,
				'prov'=>$prov,
				'ciu'=>$ciu,
				'direccion'=>$direccion,
				'codigo'=>$codigo,
				'telefono_fijo'=>$telefono_fijo,
				'telfono_movil'=>$telefono_movil,
				'profesion'=>$profesion,
				'correo'=>$correo

            );
        }
			header("Location:welcome.php");
        }
}else{
        header("index.php");
    }
    
?>
