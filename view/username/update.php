<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],
                 $_POST['nombre'],
                 $_POST['presio'],
                 $_POST['modelo'],
                 $_POST['marca'],
                 $_POST['color'],
                 $_POST['region'],
                 $_POST['descripcion']);
?>