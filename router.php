<?php   

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    include_once './app/controller/user.controller.php';
   
    if (!empty($_GET['action'])) {
        $iniciar = $_GET['action'];
    } else {
        $iniciar = 'login'; // inicio acción por defecto si no envían
    }

    $params = explode('/', $iniciar);
    switch ($params[0]) {
        //lama al controlador para pasarle la accion correspondiente
        case 'login':
            $controller = new UserController();
            $controller->login();
        break;      
        case 'recibo':
            $controller = new UserController();
            $controller->verRecibo();               
        break; 
        case 'showEditMyPass':
            $controller = new UserController();
            $controller->formMyPass();
        break;
        default:
            header("HTTP/1.0 404 Not Found");
            echo('404 Page not found');
        break;
    }
