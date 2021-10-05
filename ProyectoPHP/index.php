<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <p> 

        <title>Mi Blog Personal Crystal</title>
        <meta charset="UTF-8" />
        <meta name="Mi blog personal" content="Mi Blog Personal Crystal" />
        <meta name="description" content="Descripción de la WEB" />
        <!-- javaScript -->

        <script language="javascript">
            alert("¡Bienvenidos a mi Blog!");
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet"> 
        <!-- Aqui es donde se enlasa el css correctamente -->
        <link rel="stylesheet" href="styles/styles.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
            />
    </head>
<body>

    <!-- Mi primera Tarjeta. Una Sola-->


    <!--<nav>  es usado para contener una lista no ordenada (<ul>) de enlaces.-->
    
    
 <?php include 'views/header.php'?> <!-- llama a mi carpeta views y aqui se da el formato del encabezado, ya es independiente -->
   
    <!--<div> Representa un contenedor genérico sin nungún significado especial -->
    <div class="container">
        
        <?php include 'controller/routing.php'?>

        
        
   

  </div><!--</div> de container-->
<?php include 'views/footer.php'?> <!<!-- llama a la clase footer, pie de página -->

</body>
</html>

