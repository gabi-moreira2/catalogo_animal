<?php
    include_once("Animal.php");

    class Reptil extends Animal{

        public $tempo_submerso;

        //Método construtor de Animal
        public function __construct($nome_especie, $peso, $comprimento, $altura, $corP, $tempo_submerso){

            parent::__construct($peso, $comprimento, $altura, $corP, $nome_especie);
            $this->tempo_submerso = $tempo_submerso;
        }
    
        public function exibe_reptil(){
            echo "<h3>Répteis</h3><br/>";
            echo "<b>Réptil: </b>$this->nome_especie</br>";
            $this->exibe_animais();
            echo "<b>Tempo máximo submerso em água: </b>$this->tempo_submerso h</br>";
        }
    }
?>