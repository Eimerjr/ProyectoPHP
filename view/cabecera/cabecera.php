<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
	                            <!-- <img src="img/avatar-2-64.png" alt=""> -->
                                <a  href="#" class="dropdown-toggle no-arr" >
	                                <span class="font-icon font-icon-user"></span>
	                                <span class="lblcontactomx"><?php echo $_SESSION["usuario_nombre"]?> <?php echo $_SESSION["usuario_apellido"]?> </span>
	                            </a>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Configuraciones</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>ayuda</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="../../index.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
	                        </div>
	                    </div>
                        
	                </div><!--.site-header-shown-->

                    <input type="hidden" name="usuario_idx" value="<?php echo $_SESSION['usuario_id']?>"/> <!--GUARDAMOS EL ID  -->

                    <div class="dropdown dropdown-typical">
	                            <a  href="#" class="dropdown-toggle no-arr" >
	                                <span class="font-icon font-icon-user"></span>
	                                <span class="lblcontactomx"><?php echo $_SESSION["usuario_nombre"]?> <?php echo $_SESSION["usuario_apellido"]?> </span>
	                            </a>
	                            	                
	                        </div>


	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->