<?php

require_once("../config/conexion.php");
require_once("../models/Categoria.php");

$categoria = new Categoria();

switch ($_GET["op"]){

    case "combo":
        $datos = $categoria->get_Categoria();
        if (is_array($datos) == true and count($datos) > 0){
            foreach ($datos as $row){
                $html.= "<option value = '".$row['cate_id']."'>".$row['cate_nombre']."</option>";
            }

            echo $html;

        }

    break;

}

?>