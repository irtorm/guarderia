<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="vistas/js/fontAwesome.js"></script>
    
    <title>app web</title>
</head>

<body>
    <div>
        <!-- aqui va el menu  -->
        <?php 
            include("vistas/modulos/menu.php");        
            include("vistas/modulos/agregarPersona.php");
            include("vistas/modulos/agregarTipoFamiliar.php");        
            include("vistas/modulos/agregarIngrediente.php");        
        ?>
    </div>
    <div class="">
        <!-- aqui va la parte dinamica de la app web  -->
        <?php 
            $var2= new Controlador();
            $var2 -> enlacesPaginas();

        ?>
    </div>
    <div>
        <!-- aqui va el footer o pie de pagina  -->
    </div>
</body>
</html>
