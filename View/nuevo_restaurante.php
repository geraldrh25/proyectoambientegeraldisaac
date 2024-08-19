<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gestion de Restaurantes</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

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
        require_once("../model/insertRestaurante.php");
    ?>
<?php require_once("nav.php") ?>
    <div class="container my-5" style="background:black;border-radius:10px;padding: 20px;">
        <h1>Nuevo restaurante</h1>

        <form method="post">
            <h3>Direccion del restaurante</h3>
            <br>

            <div class="form-element mb-3">
                <label for="provincia" class="form-label">Provincia</label>
                <input type="text" name="provincia" placeholder="Digite la provincia"
                    id="provincia" class="form-control">
            </div>

            <div class="form-element mb-3">
                <label for="canton" class="form-label">Canton</label>
                <input type="text" name="canton" placeholder="Digite el canton"
                    id="canton" class="form-control">
            </div>

            <div class="form-element mb-3">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" name="distrito" placeholder="Digite el distrito"
                    id="distrito" class="form-control">
            </div>

            <div class="form-element mb-3">
                <label for="dir" class="form-label">Direccion exacta</label>
                <input type="text" name="dir" placeholder="Digite la direccion exacta"
                    id="dir" class="form-control">
            </div>

            <br>
            <h3>Informacion del restaurante</h3>
            <br>

            <div class="form-element mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" placeholder="Digite el nombre"
                    id="nombre" class="form-control">
            </div>

            <div class="form-element mb-3">
                <label for="menu" class="form-label">Menu</label>
                <input type="text" name="menu" placeholder="Digite el nombre"
                    id="menu" class="form-control">
            </div>
            <div class="text-end">
                <button type="submit" id="enviar_restaurante" name="enviar_restaurante" class="btn btn-primary">Actualizar direccion</button>
            </div>
        </form>
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