<?php
    include_once("Animal.php");

    class Ave extends Animal{

        public $alturaM_voo;

        //Método construtor de Animal
        public function __construct($nome_especie, $peso, $comprimento, $altura, $corP, $alturaM_voo){

            parent::__construct($peso, $comprimento, $altura, $corP, $nome_especie);
            $this->alturaM_voo = $alturaM_voo;
        }

        public function exibe_ave(){
            echo "<h3>Aves</h3><br/>";
            echo "<b>Ave: </b>$this->nome_especie</br>";
            $this->exibe_animais();
            echo "<b>Altura máxima de vôo: </b>$this->alturaM_voo m</br>";
        }
    }
?>