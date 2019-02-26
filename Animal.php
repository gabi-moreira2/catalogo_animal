<?php
    //Classe Animal
    class Animal{

        //Atributos
        public $peso;
        public $comprimento;
        public $altura;
        public $corP;
        public $nome_especie;

        //Método construtor
        public function __construct($peso, $comprimento, $altura, $corP, $nome_especie){

            $this->peso = $peso;
            $this->comprimento = $comprimento;
            $this->altura = $altura;
            $this->corP = $corP;
            $this->nome_especie = $nome_especie;
            
        }
    
        //Exibir os dados dos Animais
        public function exibe_animais(){

        echo "<b>Peso: </b>$this->peso Kg<br/>
              <b>Comprimento: </b>$this->comprimento m<br/>
              <b>Altura: </b>$this->altura m<br/>
              <b>Cor predominante: </b>$this->corP<br/>";
        }
    }
?>