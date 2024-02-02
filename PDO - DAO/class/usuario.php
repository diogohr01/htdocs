<?php
require_once('Sql.php');
class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario()
    {
        return $this->idusuario;
    }


    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }


    public function getDeslogin()
    {
        return $this->deslogin;
    }


    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;

        return $this;
    }


    public function getDessenha()
    {
        return $this->dessenha;
    }


    public function setDessenha($dessenha)
    {
        $this->dessenha =   $dessenha; ;

        return $this;
    }


    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }

    
    
        public function loadById($id)
        {
    
            $sql = new Sql;
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));
    
            if (count($results) > 0) {
    
                $row = $results[0];
    
                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime($row['dtcadastro']));
            }
        }
        public static function getList(){

            $sql = new Sql;
            return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
        }

        public static function search($login){
            $sql = new Sql;

            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
                ':SEARCH'=>"%".$login."%"));

}

public function login($login, $senha){
    {
    
        $sql = new Sql;
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(":LOGIN" => $login, ":SENHA" => $senha));

        if (count($results) > 0) {

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }else{
            throw new Exception("Login e/ou senha invalidos");
        }
    }
}
        public function __toString(){
            return json_encode(array(
                'idusuario'=>$this->getIdUsuario(),
                'deslogin'=>$this->getDeslogin(),
                'dessenha'=>$this->getDessenha(),
                'dtcadastro'=>$this->getDtcadastro()->format('Y-m-d H:i:s')
            ));
        }
    }
    ?> 
