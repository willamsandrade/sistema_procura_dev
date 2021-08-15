<?php

//Anexando o LangDAO Herança
require_once "LangDAO.class.php";

class DevDAO extends LangDAO{

    private $tabelaDev = "dev";

    /*
     *Método para criptografar senha
     */
    private function crip($senhaDev){
        return sha1($senhaDev);
    }

    /*
     *Método inserir Dev no banco de dados
     */
    public function inserir($Dev){
        $crip = $this->crip($Dev->getSenhaDev());

        $sql = "INSERT INTO ". $this->tabelaDev ." 
                        (nomeDev, sobreDev, emailDev, senhaDev, githubDev, idLang)
                        VALUES  ( 
                                 '". $Dev->getNomeDev() ."',
                                 '". $Dev->getSobreDev() ."',
                                 '". $Dev->getEmailDev() ."',
                                 '". $crip . "',
                                 '". $Dev->getGithubDev() ."',
                                 '". $Dev->getIdLang() ."'
                               )";
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }

    /*
     *Método buscar devs
     */
    public function buscarDevs($idLang = 0){
        if($idLang == 0){
            $sql = "SELECT * FROM "
                           .$this->tabelaDev.", ".$this->tabelaLang.
                       " WHERE "
                           .$this->tabelaLang.".idLang = ".$this->tabelaDev.".idLang";
        }else{
            $sql = "SELECT * FROM ".$this->tabelaDev.", ".$this->tabelaLang." 
                       WHERE ".$this->tabelaLang.".idLang = ".$this->tabelaDev.".idLang 
                           AND ".$this->tabelaDev.".idLang = $idLang";
        }
        return $this->executarBD($sql);
    }

}