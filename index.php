<?php
// This is a very simple routing mechanism
// In a real-world application, you would use a routing library or framework

require 'controllers/UserController.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/user':
        $controller = new UserController();
        $controller->listUsers();
        break;
    // Add other routes here
}
?>
