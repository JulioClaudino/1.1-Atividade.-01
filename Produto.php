<?php

class Produto
{ 
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($valor)
    {
        //Precisa verificar se é um numero, e se é maior que 0 e menor que 850
        if(!is_numeric($valor)) {
            echo "Não é um número.";
        }
        if ($valor > 0 && $valor < 850) {
        $this->estoque += $valor;
        } 
        elseif ($valor > 850) {
            echo "Valor excedente.";
        } 
        elseif ($valor < 0) {
            echo 'Valor inválido';
        }
    }

    public function diminuirEstoque($valor)
    {
        //Precisa verificar se é um número, e se é maior que 0 e menor que 850
        if(!is_numeric($valor)) {
            echo "Não é um número.";
        }
        if ($valor > 0 && $valor < 850)
        {
        $this->estoque -= $valor;
        } 
        elseif ($valor > 850) {
            echo "Valor excedente.";
        } 
        elseif ($valor < 0) {
            echo "Valor inválido.";
        }
    }
    
    public function reajustarPreco($percentual)
    {
        //Precisa verificar se é um número, e se é maior que 0 e menor que 30
        if(!is_numeric ($percentual)) {
            echo "Não é um número.";
        } 
        if ($percentual > 0 && $percentual < 30)
        {
        $this->preco += ($percentual*$this->preco) / 100;
        }
        elseif ($percentual > 30) {
            echo "Percentual muito alto.";
        }
        elseif ($percentual < 0) {
            echo "percentual inválido";
        }
    } 
}

$celular = new Produto;
$celular->descricao = "Celular";
$celular->estoque = 850;
$celular->preco = 1580;


$celular->aumentarEstoque(10);
$celular->diminuirEstoque(15);
$celular->reajustarPreco(20);


echo "$celular->preco<br>";
echo "$celular->estoque";