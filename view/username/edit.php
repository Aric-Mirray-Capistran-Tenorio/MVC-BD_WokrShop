<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="_1" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="_2" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Presio</label>
        <div class="col-sm-10">
            <input type="text" name="presio" class="form-control" id="_3" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Modelo</label>
        <div class="col-sm-10">
            <input type="text" name="modelo" class="form-control" id="_4" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-10">
            <input type="text" name="marca" class="form-control" id="_5" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Color</label>
        <div class="col-sm-10">
            <input type="text" name="color" class="form-control" id="_6" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Region</label>
        <div class="col-sm-10">
            <input type="text" name="region" class="form-control" id="_7" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label  class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="_8" value="<?= $user[7]?>">
        </div>
    </div>
 
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>