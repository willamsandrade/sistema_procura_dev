<?php

class MensagemDAO{
    private $conexao;
    protected $tabelaMensagem = "mensagem";

    public function __construct(){
        $this->conexao = new Conexao();
    }

    protected function executarBD($sql){
        return mysqli_query($this->conexao->getCon(), $sql);
    }

    /*
     * Método de Inserir no Banco
     */
    public function inserir($Mensagem){
        $sql = "INSERT INTO " . $this->tabelaMensagem .
               "( 
                  idDev, 
                  nomeMensagem, 
                  emailMensagem, 
                  whatsappMensagem, 
                  mensagem,
                  statusMensagem,
                  controleMensagem           
                ) VALUES (
                  ".$Mensagem->getIdDev().",
                  '".$Mensagem->getNomeMensagem()."',
                  '".$Mensagem->getEmailMensagem()."',
                  '".$Mensagem->getWhatsappMensagem()."',
                  '".$Mensagem->getMensagem()."',
                  0,
                  '".$Mensagem->getControleMensagem()."'  
                )";
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }

    /*
     * Método ler todas as mensagens do dev
     */
    public function lerTodos($idDev){
        $sql = "SELECT * FROM ".$this->tabelaMensagem." WHERE idDev = $idDev";
        return $this->executarBD($sql);
    }

    /*
     * Método mudar status da Mensagem
     */
    public function mudarStatus($idDev){
        $sql = "UPDATE ".$this->tabelaMensagem." 
                  SET statusMensagem = 1 
                     WHERE idDev = $idDev";
        if ($this->executarBD($sql)) {
            return true;
        } else {
            return false;
        }

    }
}