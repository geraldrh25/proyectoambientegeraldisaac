<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php';
      include_once '../Controller/rolController.php'; 

      $datos = ConsultarUsuario($_GET["q"]);
?>

<!DOCTYPE html>
<html>

<?php 
    HeadCSS();
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <?php require_once("nav.php") ?>

        <div class="content-wrapper">
            <section class="content">

                <div class="content-header">
                    <div class="container-fluid">
                        <h1 class="m-0 text-dark">Datos del usuario</h1>
                        <br />
                        <div class="row mb-2">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <form action="" method="post">

                                    <input id="txtConsecutivo" name="txtConsecutivo" type="hidden" value="<?php echo $datos["Consecutivo"] ?>">

                                    <Label>Nombre</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtNombre" name="txtNombre" type="text" readOnly class="form-control"
                                            placeholder="Nombre" required value="<?php echo $datos["Nombre"] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label>Correo Electrónico</Label>
                                    <div class="input-group mb-3">
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control"
                                            placeholder="Correo Electrónico" required
                                            value="<?php echo $datos["Correo"] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label>Perfil</Label>
                                    <div class="input-group mb-3">
                                        <select id="selectRol" name="selectRol" class="form-control" required>
                                            <?php ConsultarRoles($datos["IdRol"]); ?>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-9">

                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <button type="submit" id="btnActualizarUsuario" name="btnActualizarUsuario"
                                                class="btn btn-primary btn-block">Procesar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

       
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    <script src="dist/js/usuarios.js"></script>
</body>

</html>