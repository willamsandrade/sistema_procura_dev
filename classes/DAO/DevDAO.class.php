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

    /*
     *Método buscar dados dev por id
     */
    public function dadosDev($idDev){
        $sql = "SELECT * FROM "
                    .$this->tabelaDev.", ".$this->tabelaLang.
                        " WHERE "
                            .$this->tabelaLang.".idLang = ".$this->tabelaDev.".idLang 
                                AND ".$this->tabelaDev.".idDev = $idDev";
        return $this->executarBD($sql);
    }

    /*
     *Método buscar dados dev por email
     */
    public function dadosDevEmail($emailDev){
        $sql = "SELECT * FROM "
            .$this->tabelaDev.", ".$this->tabelaLang.
            " WHERE "
            .$this->tabelaLang.".idLang = ".$this->tabelaDev.".idLang 
                                AND ".$this->tabelaDev.".emailDev = '$emailDev'";
        return $this->executarBD($sql);
    }

    /*
     * Método para logar no sistema
     */
    public function logar($emailDev, $senhaDev){ //Logar no sistema
        $crip =  $this->crip($senhaDev);
        $sql = "SELECT * FROM ".$this->tabelaDev." 
                    WHERE emailDev = '$emailDev' AND senhaDev = '$crip'";
        if( mysqli_num_rows( $this->executarBD( $sql ) ) > 0 ){
            return true;
        }else{
            return false;
        }
    }

    /*
     * Método atualizar dados do dev
     */
    public function atualizar($Dev){
        $sql = "UPDATE ".$this->tabelaDev." 
                     SET nomeDev = '".$Dev->getNomeDev()."', 
                         sobreDev = '".$Dev->getSobreDev()."', 
                         emailDev = '".$Dev->getEmailDev()."', 
                         githubDev = '".$Dev->getGithubDev()."', 
                         idLang = ".$Dev->getIdLang()." 
                            WHERE idDev = ".$Dev->getIdDev();
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }

    /*
     * Método atualizar dados do dev
     */
    public function modificarSenha($Dev){
        $crip = $this->crip($Dev->getSenhaDev());
        $sql = "UPDATE ".$this->tabelaDev." 
                     SET senhaDev = '".$crip."' 
                            WHERE idDev = ".$Dev->getIdDev();
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }

    /*
     * Método deletar dados do dev
     */
    public function deletar($idDev){
        $sql = "DELETE FROM ".$this->tabelaDev." WHERE idDev = $idDev";
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }


}