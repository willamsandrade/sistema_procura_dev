<?php
class LangDAO {

    private $conexao;
    protected $tabelaLang = "lang";

    public function __construct(){
        $this->conexao = new Conexao();
    }

    protected function executarBD($sql){
        return mysqli_query($this->conexao->getCon(), $sql);
    }

    //Inserir no banco de dados
    public function inserir($Lang){
        $sql = "INSERT INTO ". $this->tabelaLang ." (descLang)
                        VALUES (
                        '".$Lang->getDescLang()."'
                        )";
        if ($this->executarBD($sql)) {
            return true;
        } else {
            return false;
        }
    }

    //Recuperar todos as linguagens do banco
    //Se for enviado um idLang, será listado todas as linguagens
    //Exceto a do idLang enviado
    public function buscar($idLang = 0){
        if ($idLang == 0){
            $sql = "SELECT * FROM $this->tabelaLang ORDER BY descLang ASC";
        }else{
            $sql = "SELECT * FROM $this->tabelaLang
                                WHERE idLang <> $idLang 
                                    ORDER BY descLang ASC";
        }
        return $this->executarBD($sql);
    }

    //Exibir dados de uma linguagem escolhida por id
    public function dadosLang($idLang){
        $sql = "SELECT * FROM ". $this->tabelaLang ." WHERE idLang = $idLang";
        return $this->executarBD( $sql ); //retornar os dados do tipo
    }

    //Atualizar Linguagem no banco de dados
    public function atualizar($Lang){
        $sql = "UPDATE ".$this->tabelaLang." 
                        SET descLang = '".$Lang->getDescLang()."' 
                           WHERE idLang = " . $Lang->getIdLang();
        if ($this->executarBD($sql)) {
            return true;
        } else {
            return false;
        }
    }

    //Deletar Linguagem no banco de dados
    public function deletar($Lang){
        $sql = "DELETE FROM ".$this->tabelaLang." WHERE idLang = " . $Lang->getIdLang();
        if( $this->executarBD($sql) ){
            return true;
        }else{
            return false;
        }
    }

}