    <!-- Content Wrapper. Contains page content -->

     <?php
     /* Dependencias requeridas para el funcionamiento de la DataTable */
    /* ==============================================================
            <---  CSS TEMPLATE  --->
            ============================================================== */

            echo link_tag('assets/darktemplate/plugins/bootstrap-sweetalert/sweet-alert.css');

    /* ==============================================================
            <---  JS TEMPLATE  --->
            ============================================================== */

            echo script_tag("assets/darktemplate/plugins/bootstrap-sweetalert/sweet-alert.js");
            echo script_tag("assets/darktemplate/pages/jquery.sweet-alert.init.js");

    /* ==============================================================
            <---  JS MYAPP  --->
            ============================================================== */
             echo script_tag("assets/myapp/js/MY_Functions.js");
            ?>


<html>
    <head>
        <meta charset="utf-8">

    </head>

    <script>
        var resizefunc = [];

        $(document).ready(function() {


        });


    </script>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Inicio</h4>

                            </div>
                        </div>

                        <br>

                         <div class="col-lg-12">
                          <div class="panel panel-border panel-info">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Titulo</h3>
                              </div>
                              <div class="table-responsive">
                                <div class="panel-body">

                                  <div class="card-box">
                                  <!-- <form role="form" method="POST" id="formMaterial"> -->
                                      <div class="box-body">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="nombre" placeholder="Nombre">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="apaterno" placeholder="Apellido paterno">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="amaterno" placeholder="Apellido Materno">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="telefono" placeholder="Telefono">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="email" placeholder="Email">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="username" placeholder="Usuario">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" required="" id="password" placeholder="Contraseña">
                                        </div>
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" id="ocupacion" placeholder="Ocupacion">
                                        </div>
                                        <div align="center">
                                          <button class="btn btn-primary waves-effect waves-light" onClick="guardar_usuario();">Guardar</button>
                                        </div>
                                      </div>
                                  <!-- </form> -->
                                </div>

                            </div>
                          </div>
                        </div>
                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->

                <footer class="footer">
                     <?= date('Y')?> &copy;
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->

    </body>
</html>
