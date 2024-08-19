<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gestion de Restaurantes</title>

<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.css">

<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../css/magnific-popup.css">					
<link rel="stylesheet" href="../css/aos.css">		
<link rel="stylesheet" href="../css/ionicons.min.css">
<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
<link rel="stylesheet" href="../css/jquery.timepicker.css">		
<link rel="stylesheet" href="../css/flaticon.css">
<link rel="stylesheet" href="../css/icomoon.css">
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
        require_once("../model/gestionRestaurante.php");
    ?>
<?php require_once("nav.php") ?>
    <div class="container my-5" style="background:black;border-radius:10px;padding: 20px;">
        <h1>Restaurantes</h1>
        <a href="./nuevo_restaurante.php" class="btn btn-primary mb-3">Nuevo restaurante</a>

        <table class="table table-hover" style="color:white;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menu</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($restaurantes as $restaurante): ?>
                    <tr>
                        <td style="width: 150px;">
                            <?php echo $restaurante->COD_REST ?>
                        </td>

                        <td style="width: 150px;">
                            <?php echo $restaurante->NOM_REST ?>
                        </td>

                        <td style="width: 150px;">
                            <?php echo $restaurante->MENU_REST ?>
                        </td>
                        <td class="text-end">
                            <a href="./modifica_restaurante.php?id=<?php echo $restaurante->COD_REST ?>" class="btn btn-primary">Modificar restaurante</a>
                            <a href="./modifica_direccion.php?id=<?php echo $restaurante->COD_POST ?>" class="btn btn-success">Modificar direccion</a>
                            <a href="./gestionRestaurante.php?id=<?php echo $restaurante->COD_REST ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
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
</html>