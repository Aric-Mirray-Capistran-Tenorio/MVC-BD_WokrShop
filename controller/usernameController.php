<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($nombre,$presio,$modelo,$marca,$color,$region,$descrip){
            $id = $this->model->insertar($nombre,$presio,$modelo,$marca,$color,$region,$descrip);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id,$nombre,$presio,$modelo,$marca,$color,$region,$descrip){
            return ($this->model->update($id,$nombre,$presio,$modelo,$marca,$color,$region,$descrip) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>