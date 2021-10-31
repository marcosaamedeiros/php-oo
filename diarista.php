<?php

	class Diarista 
{
	public $nome;    
    public $telefone;
    public $endereco;
    
    public function atenderCliente($nomeCliente)
    {
    	$nomeDiarista = $this->nome;
        echo "<br> O(A) $nomeDiarista atendeu o cliente $nomeCliente. ";
    }
    
    /*
    * Avaliar cliente
    * @param string $nomeCliente
    * @param int $nota
    * @return void 
    */
    
    
    public function avaliarCliente($nomeCliente, $nota)
    {
      	$this->atenderCliente($nomeCliente);
        echo "<br> Avaliou o cliente $nomeCliente com a nota $nota. ";
    }
}
    
$maria = new Diarista;
	$maria->nome = "Maria da Silva";
    $maria->telefone = "(31) 99999 8888";
    $maria->endereco = "Rua T, 27.";
    //$maria->atenderCliente("Marcos");
    $maria->avaliarCliente("Marcos", 5);
    
var_dump($maria);

$joao = new Diarista;
    $joao->nome = "Joao da Silva";
    $joao->telefone = "(31) 97777 8888";
    $joao->endereco = "Rua Z, 58.";
    //$joao->atenderCliente("Pedro da Silva");    
    $joao->avaliarCliente("Pedro da Silva", 4);
    
var_dump($joao);