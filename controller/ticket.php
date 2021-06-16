<?php

require_once("../config/conexion.php");
require_once("../models/Ticket.php");

$ticket = new Ticket();

switch ($_GET["op"]){

    case "insert":
      $ticket->insert_ticket($_POST["usuario_id"],$_POST["categoria_id"],$_POST["tick_titulo"],$_POST["tick_descripcion"]);
    break;

}

?>