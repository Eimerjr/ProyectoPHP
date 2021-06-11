<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../home/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../home/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../home/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../home/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../home/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../home/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <?php 
        require_once("../MainHead/mainhead.php");
        require_once("../MainNav/mainnav.php");

        ?>
                <!-- /.navbar-top-links -->

            <!-- /.col-lg-12 -->
             <div id="page-wrapper"> 
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Inicio</h1>
                        </div>

                        
                    <!-- /.row -->
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>New Comments!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Support Tickets!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.row -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../home/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../home/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../home/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../home/js/raphael.min.js"></script>
        <script src="../home/js/morris.min.js"></script>
        <script src="../home/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../home/js/startmin.js"></script>

    </body>
</html>
