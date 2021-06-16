<?php

class Ticket extends Conectar{

    public function insert_ticket($usuario_id,$categoria_id,$tick_titulo,$tick_descripcion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_ticket (tick_id, usuario_id, categoria_id, tick_titulo, tick_descripcion, estado) VALUES (NULL, ?, ?, ?,?, '1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->bindValue(2, $categoria_id);
        $sql->bindValue(3, $tick_titulo);
        $sql->bindValue(4, $tick_descripcion);
        $sql->execute();

        return $resultado = $sql->fetchAll();

    }


}


?>