<?php

/* 6 - Exercício
Crie uma classe chamada Produto com os atributos:  
- nome  
- preco  
- quantidade  

Adicione um método calcularTotal() que retorna o valor total
em estoque (preço × quantidade).*/

class Product {

    public $name, $price, $amount;

    public function __construct($name, $price, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;        
    }

    public function totalCalculation ()
    {
        $total = $this->price * $this->amount;
        return number_format($total,2,",",".");
    }

    public function display ()
    {
        echo "===========" . PHP_EOL;
        echo "Produto: $this->name" . PHP_EOL;
        echo "Preco: R$ $this->price" . PHP_EOL;
        echo "Quantidade: $this->amount unidades" . PHP_EOL;
        echo "Valor total em estoque: " . $this->totalCalculation() . PHP_EOL;
        echo "===========" . PHP_EOL; 
    }
}

$product = new Product("Mouse lp002-4d",129.99,50);

$product->display();