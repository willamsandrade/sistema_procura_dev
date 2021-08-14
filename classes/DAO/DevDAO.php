<?php

//Anexando o LangDAO Herança
require_once "LangDAO.class.php";

class DevDAO extends LangDAO{

    private $tabela = "dev";

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

        $sql = "INSERT INTO dev 
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

}