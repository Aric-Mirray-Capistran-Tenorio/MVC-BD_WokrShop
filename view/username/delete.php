<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);
    $obj->delete($_GET['nombre']);
    $obj->delete($_GET['presio']);
    $obj->delete($_GET['modelo']);
    $obj->delete($_GET['marca']);
    $obj->delete($_GET['color']);
    $obj->delete($_GET['region']);
    $obj->delete($_GET['descrip']);

?>