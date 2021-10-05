
<?php

include('./model/conectadb.php');

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
echo "<br>";
switch ($var_getMenu) {
    case "bienvenida":
        require_once ('./views/bienvenida.php');
        break;
    case "acercademi":
        require_once('./views/acercademi.php');
        break;
    case "escuela":
        require_once('./views/escuela.php');
        break;
    
    case "viajes":
        require_once('./views/viajes.php');
        break;
    case "redesociales":
        require_once('./views/redesociales.php');
        break;
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();

        include_once './views/viewalumnos.php';
        break;
     case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;
    case "deletealumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once ('./model/alumnos.php');        
        $sqlAlumnos = alumnos::delete($_idalumno);
        header("location: ./index.php?menu=alumnos");       
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;
    default:
        require_once('./views/bienvenida.php');
}
?>