<?php
require_once(CORE .'/Model.php');

class LoginModel extends Model {
    private $id_administrador;
    private $codigo_admin;
    private $rol;

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function validate_user($id_administrador, $codigo_admin, $rol){
        $stm = $this->pdo->prepare("SELECT * FROM 'admin' = :EmailParam AND 'user_email' = :PassParam " );

        $stm->bindParam(':IdParam',$id_administrador);
        $stm->bindParam(':CodgigoParam',$codigo_admin);
        $stm->bindParam(':RolParam',$rol);

        $stm->execute();

        $data = $stm->fetch();

        if($data){
            $this->id_administrador = $data ["id_administrador"];
            $this->codigo_admin = $data ["codigo_admin"];
            $this->rol = $data ["rol"];

        }else{
            return false;
        }
    }
    public function setid($id_administrador){
        $this->id_administrador = $id_administrador;
    }
    public function setcodigo($codigo_admin){
        $this->codigo_admin = $codigo_admin;
    }
    public function setrol($rol){
        $this->rol = $rol;
    }

    public function getId()
    {
        return $this->id_administrador;
    }
    public function getcodigo()
    {
        return $this->codigo_admin;
    }
    public function getrol()
    {
        return $this->rol;
    }

}