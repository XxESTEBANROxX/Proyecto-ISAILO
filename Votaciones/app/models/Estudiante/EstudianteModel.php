<?php
require_once(CORE .'/Model.php');

class LoginModel extends Model {
    private $codigo_institucional;
    private $nombre_apellido;
    private $curso;
    private $rol;

    public function create($data_array){

    }
    public function read($data_array){

    }
    public function update($data_array){

    }
    public function delete($data_array){

    }
    public function validate_user($codigo_institucional, $nombre_apellido, $curso, $rol){
        $stm = $this->pdo->prepare("SELECT * FROM 'estudiante' = :CodigoParam AND 'NombreParam' = :CursoParam AND RolParam " );

        $stm->bindParam(':CodigoParam',$codigo_institucional);
        $stm->bindParam(':NombreParam',$nombre_apellido);
        $stm->bindParam(':CursoParam',$curso);
        $stm->bindParam(':RolParam',$rol);

        $stm->execute();

        $data = $stm->fetch();

        if($data){
            $this->codigo_institucional = $data ["codigo_institucional"];
            $this->nombre_apellido = $data ["nombre_apellido"];
            $this->curso = $data ["curso"];
            $this->rol = $data ["rol"];
        }else{
            return false;
        }
    }
    public function setcodigo($codigo_institucional){
        $this->codigo_institucional = $codigo_institucional;
    }
    public function setnombre($nombre_apellido){
        $this->nombre_apellido = $nombre_apellido;
    }
    public function setcurso($curso){
        $this->curso = $curso;
    }
    public function setrol($rol){
        $this->rol = $rol;
    }
    public function getcodigo()
    {
        return $this->codigo_institucional;
    }
    public function getnombre()
    {
        return $this->nombre_apellido;
    }
    public function getcurso()
    {
        return $this->curso;
    }
    public function getrol()
    {
        return $this->rol;
    }
}