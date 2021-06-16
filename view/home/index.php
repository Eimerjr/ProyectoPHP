<?php
    require_once("../../config/conexion.php");
    if (isset($_SESSION["usuario_id"])){

?>

<!DOCTYPE html>
<html>

    <?php 
    require_once("../estilocabecera/estilocabecera.php");
    ?>
	<title>Ticket Man</title>
</head>
<body class="with-side-menu">

	<?php require_once("../cabecera/cabecera.php") ?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../nav/nav.php");   ?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->

    <?php require_once("../Mainjs/js.php"); ?>
    <script type ="text/javascript" src="home.js" ></script>
</body>
</html>
<?php
}else{
header("Location:".Conectar::ruta()."index.php");
}

?>