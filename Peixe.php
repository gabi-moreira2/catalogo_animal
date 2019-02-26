<?php
    include_once("Animal.php");

    class Peixe extends Animal{

        public $temperatura_media;

        //Método construtor de Animal
        public function __construct($nome_especie, $peso, $comprimento, $altura, $corP, $temperatura_media){

            parent::__construct($peso, $comprimento, $altura, $corP, $nome_especie);
            $this->temperatura_media = $temperatura_media;
        }
    
        public function exibe_peixe(){
            echo "<h3>Peixes</h3><br/>";
            echo "<b>Peixe: </b>$this->nome_especie</br>";
            $this->exibe_animais();
            echo "<b>Temperatura média em que sobrevive: </b>$this->temperatura_media °C</br>";
        }
    }
?>