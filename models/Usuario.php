<?php 

class Usuario extends Conectar{

    public function login(){
        $conectar=parent::conexion();
        parent::set_names();
        if(isset($_POST["enviar"])){
            $correo = $_POST["usuario_correo"];
            $contra = $_POST["usuario_contra"];
            if(empty($correo) and empty($contra)){
                header("Location:".conectar::ruta()."index.php?m=2");
                echo '<script language="javascript">alert("llega al 1");</script>';

                exit();
            }else{
                echo '<script language="javascript">alert("llega al 2");</script>';
                $sql = "SELECT * FROM tm_usuario WHERE usuario_correo=? and usuario_contra=? and estado=1";
                $stmt=$conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $contra);
                $stmt->execute();
                $resultado = $stmt->fetch();
                if (is_array($resultado) and count($resultado)>0){
                    $_SESSION["usuario_id"]=$resultado["usuario_id"];
                    $_SESSION["usuario_nombre"]=$resultado["usuario_nombre"];
                    $_SESSION["usuario_apellido"]=$resultado["usuario_apellido"];
                    header("Location:".Conectar::ruta()."view/Home/");
                    exit(); 
                }else{
                    echo '<script language="javascript">alert("llega al 3");</script>';
                    header("Location:".Conectar::ruta()."index.php?m=1");
                    exit();
                }
            }
        }
    }



}


?>