<?php
    include_once("Animal.php");

    class Mamifero extends Animal{

        public $velocidade_max;

        //Método construtor de Animal
        public function __construct($nome_especie, $peso, $comprimento, $altura, $corP,  $velocidade_max){

            parent::__construct($peso, $comprimento, $altura, $corP, $nome_especie);
            $this->velocidade_max = $velocidade_max;
        }
    
        public function exibe_mamifero(){
            echo "<h3>Mamíferos</h3><br/>";
            echo "<b>Mamífero: </b>$this->nome_especie</br>";
            $this->exibe_animais();            
            echo "<b>Velocidade Máxima: </b>$this->velocidade_max Km/h</br>";
        }
    }
?>