<?php
    class Conta {
//atributos
        public    $numConta;
        protected $tipo;
        private   $dono;
        private   $saldo;
        private   $status;

//Metodo Construtor      
        public function __construct() {
            $this->saldo = 0;
            $this->setStatus($st);
            echo "<p>Conta criada com Sucesso</p>";
        }
//Metodos
        public function abrirConta($t) { 
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t === "CC"){
                $this->setSaldo(50);
            }elseif ($t === "CP") {
                $this->setSaldo(150);
        }
        }
        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }elseif ($this->getSaldo() < 0) {
                echo "<p>Conta está em débito, Impossivel encerrar!</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " encerrada !</p>";
        }
        }
        public function depositar($v){
         if($this->getStatus()){
            // $this->setSaldo($this->getSaldo() + $v);
            $this->saldo = $this->saldo + $v;
         }   else{
             echo "<p>Conta fechada, não consigo depositar</p>";
         }
        }
        public function sacar($v) {
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                   // $this->saldo = $this->saldo - $v;
                    $this->setSaldo($this->getSaldo() - $v);
                }else {
                    echo "Saldo Insuficiente para saque";
                }
            }else{
                echo "não posso sacar de uma conta fechada";
            }
        }
        public function pagarMensal(){
          if ($this->getTipo() === "CC"){
              $v = 12;
          }elseif ($this->getTipo() === "CP"){
              $v = 20;
          }
          if ($this->getStatus()){
              $this->setSaldo($this->getSaldo() - $v);
          }else{
              echo "Problemas com a conta. Não posso cobrar";
          }
              
        }
//Metodos Especiais       
        public function getnumConta(){
            return $this->numConta;
        }
        public function setnumConta($n){
            $this->numConta = $n;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($st){
            $this->status = $st;
        }
    }

