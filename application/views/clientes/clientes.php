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
                                <h4 class="page-title">Clientes</h4>
                               
                            </div>
                        </div>

                        <br>

                         <div class="col-lg-12">
                          <div class="panel panel-border panel-info">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Lista de clientes</h3>
                              </div>
                              <div class="table-responsive">
                                <div class="panel-body">

                                  <div class="card-box">
                                  <!-- <form role="form" method="POST" id="formMaterial"> -->
                                      <div class="box-body col-xs-4">

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="id_client" placeholder="Nombre" style = "display: none">
                                                    <input class="form-control" type="text" required="" id="nombre" placeholder="Nombre">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="apaterno" placeholder="Apellido paterno">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="amaterno" placeholder="Apellido materno">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="telefono" placeholder="Telefono">
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="email" placeholder="Email">
                                                </div>
                                            </div>

                                            <!-- <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="username" placeholder="Usuario" onblur="VerificaUsuario();">
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Contraseña">
                                                </div>
                                            </div> -->

                                            <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="empresa" placeholder="Empresa">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group ">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" id="tokem" placeholder="Token">
                                                </div>
                                            </div> -->

                                            <!-- <div class="col-md-12"> -->
                                                
                                            <!-- <label for="rol">Rol</label>

                                            <select name="rol" id="rol" class="form-select">
                                                <option value="" selected disabled>Seleccione un rol</option>
                                                <option value="A">Administrador</option>
                                                <option value="E">Empleado</option>
                                            </select>
                                            </div> -->

                                            <div class="col-md-12" id="divestado"  style = "display: none">
                                                
                                                <label for="estado">Estado</label>

                                            <select name="estado" id="estado" class="form-select">
                                                <option value="" selected disabled>Elije Estado</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                            </div>

                                            <div align="center">
                                                <button class="btn btn-primary waves-effect waves-light" onClick="GuardaCliente();" id = "botonguardar">Guardar</button>
                                            </div>
                                            <div align="center">
                                                <button class="btn btn-primary waves-effect waves-light" onClick="UpdateCliente();" style = "display: none" id = "botonactualizar">Actualizar</button>
                                            </div>


                                      </div>
                                  <!-- </form> -->
                                  <div class="panel panel-border panel-info">
                                          <div class="table-responsive">
                                            <div class="panel-body">
                                              <table id="datatable1" class="table table-striped table-bordered table-responsive">
                                                <thead>
                                                <tr>
                                <th>Nombre</th>
                                <th>Empresa</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <th>Borrar</th>

                              </tr>
                            </thead>
                            <tbody> 

                            <?php

                                    $valores = count($clientes);

                                    for ($i=0; $i < $valores ; $i++) { 
                                    $res = $clientes[$i];
                                    $id = $res -> id_cliente;
                                    $nombre = $res -> nombre;
                                    // $ocupacion= $res -> ocupacion;
                                    $apaterno = $res -> apaterno;
                                    $amaterno = $res -> amaterno;
                                    $empresa = $res -> empresa;
                                    $estatus = $res -> estado;

                                    $nombre_completo = $nombre . ' ' .$apaterno. ' ' .$amaterno;
                                    

                                    echo "
                                    <tr>
                                        <td>$nombre_completo</td>
                                        <td>$empresa</td>";
                                        if($estatus == 1) {
                                          echo "<td><span class='label label-success'>Activo</span></td>";
                                        }else{
                                          echo "<td><span class='label label-danger'>Inactivo</span></td>";
                                        }
                                    

                                        echo "<td>";
                                        echo "<a href='#' id='Editar' onclick='EditarCliente($id)'><i class='fa fa-pencil'></i> </a>
                                        </td>";

                                        echo "<td>";
                                        echo "<a href='#' id='Borrar' onclick='BorrarCliente($id)'><i class='md md-close'></i> </a>
                                        </td>";
                                    
                                    echo "</tr>";
                                    }
                                    ?> 


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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