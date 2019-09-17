<?php 
namespace App\Insert;

use DB\Conexao as DB;

class Inserir {
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

    public function inserir() {
        $bd   = $this->banco;

        //Conteúdo dos arrays
        
        foreach ($this->elemento as $chave => $valor) {
        	$valores[] = "'{$valor}'"; 
        }

        $valores = implode(", ",$valores);
        
        
        //Inserindo        
        $sql = "INSERT INTO {$this->tabela} VALUES ({$valores})";

        $consulta  = $bd->prepare($sql);
        $resultado = $consulta->execute();

        if( $resultado ) {
            return "<p style = 'color: rgb(28, 187, 4); font-family: georgia; font-size: 27px; text-align: center;'> Adicionado com sucesso.</p><br>";
        }
        return "<p style = 'color: red; font-family: georgia; font-size: 27px; text-align: center'> Não foi adicionado por conta de um erro.</p><br>";
    }

    public function __toString() {
        return $this->inserir();
    }


}
 ?>