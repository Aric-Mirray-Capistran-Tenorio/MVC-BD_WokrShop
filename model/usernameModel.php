<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$presio,$modelo,$marca,$color,$region,$descrip){
            $stament = $this->PDO->prepare("INSERT INTO tbl_producto VALUES(null,:nombre,:presio,:modelo,:marca,:color,:region,:descripcion)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":presio",$presio);
            $stament->bindParam(":modelo",$modelo);
            $stament->bindParam(":marca",$marca); 
            $stament->bindParam(":color",$color);
            $stament->bindParam(":region",$region);          
            $stament->bindParam(":descripcion",$descrip);        
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_producto where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_producto");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$presio,$modelo,$marca,$color,$region,$descrip){
            $stament = $this->PDO->prepare("UPDATE tbl_producto SET nombre = :nombre , presio = :presio , modelo = :modelo , marca = :marca , color = :color , region = :region , descripcion = :descripcion  WHERE id = :id");
            $stament->bindParam(":id",$id);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":presio",$presio);
            $stament->bindParam(":modelo",$modelo);
            $stament->bindParam(":marca",$marca);
            $stament->bindParam(":color",$color);
            $stament->bindParam(":region",$region);
            $stament->bindParam(":descripcion",$descrip);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_producto WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>