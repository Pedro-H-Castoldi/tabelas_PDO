<?php 
namespace App\Edit;

use DB\Conexao as DB;

class Editar {
    private $tabela;
    private $banco;
    private $elemento;

    //Nome da tabela e o POST (Vem do formulario para inserir os valores )
    public function __construct($nomeTabela, $elementos)
    {
        $this->tabela = $nomeTabela;
        $this->banco = DB::getInstance();
        $this->elemento = $elementos;
    }

    public function editar() {
       $bd   = $this->banco;

        //Conteúdo dos arrays
        
        foreach ($this->elemento as $chave => $valor) {
            $valores[] = "$chave = '{$valor}'"; 
            if($chave == $this->tabela.'_id'){$id = $valor;}
        }
        $valores = implode(", ",$valores);
        //Editando        
        $sql = "UPDATE {$this->tabela} SET {$valores} WHERE {$this->tabela}_id = '{$id}'";
        $consulta  = $bd->prepare($sql);
        $resultado = $consulta->execute();

        if( $resultado ) {
            return "<p style = 'color: rgb(28, 187, 4); font-family: georgia; font-size: 27px; text-align: center;'> Editado com sucesso.</p><br>";
        }
        return "<p style = 'color: red; font-family: georgia; font-size: 27px; text-align: center'> Não foi editado por conta de um erro.</p><br>";
    }

    public function __toString() {
        return $this->editar();
    }


}
 ?>