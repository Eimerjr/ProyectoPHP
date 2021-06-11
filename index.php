<?php

require_once("config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"]=="si") {
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
	phpinfo();

}

?>

<!doctype html>
<html lang="es">
  <head>
  	<title>Inicio sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="public/css/style.css">
    <!-- <link rel="stylesheet" href="public/css/bootstrap.min.css"> -->
    


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">INICIAR SESIÓN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Inicia sesión</h3>
						<form action="" class="login-form" method="post" id="id_loginForm">

						<?php
							if(isset($_GET["m"])){
								switch($_GET["m"]){
									case "1":
										?>
										<div class="alert alert-danger" role="alert">
										Contraseña y/o correo erroneos
									</div>
										<?php
										break;
									case "2":
										?>
										<div class="alert alert-danger" role="alert">
  										 Llene todos los campos
										</div>
										<?php
										break;
								}
							}
							?>

							

		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" id="usuario_correo" name="usuario_correo" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" id="usuario_contra" name="usuario_contra" placeholder="Password" >
	            </div>
	            <div class="form-group d-md-right">

								<div class="w-20 text-md-right">
									<a href="#">Recuperar Contraseña</a>
								</div>
                              
                                
	            </div>
                <div class="w-20 text-md-center">
                                    <p>aún no tienes una cuenta?
									<a href="#" ></p><u>Crear Cuenta</u></a>
                                    </p>
								</div>
	            <div class="form-group">
                    <input type="hidden" name="enviar" class="form-control" value="si"/>
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Ingresar</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

    <!-- <script src="public/js/jquery.min.js"></script> -->
    <!-- <script src="public/js/bootstrap.min.js"></script> -->
    <!-- <script src="public/js/popper.js"></script> -->

    <!-- <script src="public/js/main.js"></script> -->
	

	</body>
</html>

