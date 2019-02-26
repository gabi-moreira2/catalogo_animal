<?php
    include_once("Animal.php");

    class Anfibio extends Animal{

        public $tempo_submerso;

        //Método construtor de Animal
        public function __construct($nome_especie, $peso, $comprimento, $altura, $corP, $tempo_submerso){

            parent::__construct($peso, $comprimento, $altura, $corP, $nome_especie);
            $this->tempo_submerso = $tempo_submerso;
        }
    
        public function exibe_anfibio(){
            echo "<h3>Anfíbio</h3><br/>";
            echo "<b>Anfíbio: </b>$this->nome_especie</br>";
            $this->exibe_animais();
            echo "<b>Tempo máximo submerso em água: </b>$this->tempo_submerso h</br>";
        }
    }
?>