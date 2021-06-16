<?php
    require_once("../../config/conexion.php");
    if (isset($_SESSION["usuario_id"])){

?>

<!DOCTYPE html>
<html>

    <?php 
    require_once("../estilocabecera/estilocabecera.php");
    ?>
	<title>Ticket Nuevo</title>
</head>
<body class="with-side-menu">

	<?php require_once("../cabecera/cabecera.php") ?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../nav/nav.php");   ?>

	<div class="page-content">
		<div class="container-fluid">

          <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li><a href="#">Nuevo Ticket</a></li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		</div><!--.container-fluid-->

        <div class="box-typical box-typical-padding">

                    <p> PROCESO DE CREACION DE SU TICKET</p>
                    <div class="row">
					<form method="post" id="ticket_form">

					<input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $_SESSION["usuario_id"] ?>">

					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="categoria_id" >Categoria</label>
							<select id="categoria_id" name ="categoria_id" class="form-control">

							</select>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tick_titulo" >Titulo</label>
							<input type="text" id="tick_titulo" name="tick_titulo" class="form-control"  placeholder="Ingrese el nombre de su ticket">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group semibold">
							<label class="form-label" for="tick_descripcion">Descripcion</label>
                                <div class="summernote-theme-2" >
                                      <textarea id ="tick_descripcion" name="tick_descripcion" class="summernote"  name ="name" placeholder="Ingrese su motivo de ticket"></textarea>
                                </div>
						</fieldset>
					</div>

                    <div class="col-lg-12">
                    <button type="submit" name="action" value ="add" class="btn btn-rounded btn-inline">Guardar</button>
                    </div>
                </form>
				</div><!--.row-->
        </div>

	</div><!--.page-content-->

    <?php require_once("../Mainjs/js.php"); ?>
    <script type ="text/javascript" src="nuevoTick.js" ></script>
</body>
</html>
<?php
}else{
header("Location:".Conectar::ruta()."index.php");
}

?>