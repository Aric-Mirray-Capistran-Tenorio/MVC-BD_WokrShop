<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label  class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Presio</label>
        <input type="text" name="presio" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Modelo</label>
        <input type="text" name="modelo" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Marca</label>
        <input type="text" name="marca" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Color</label>
        <input type="text" name="color" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Region</label>
        <input type="text" name="region" required class="form-control" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Descripcion</label>
        <input type="text" name="descrip" required class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>