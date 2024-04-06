<?php
  class Filme {
    private $nome;
    private $sala;
    private $ingressos;
    
    public function __construct($nome, $sala, $ingresso){
      $this->nome = $nome;
      $this->sala = $sala;
      $this->ingressos = $ingresso;
    }
    public function getNome(){
      return $this->nome;
    }
    public function getSala(){
      return $this->sala;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function setSala($sala){
      $this->sala = $sala;
    }
    public function getIngressos(){
      return $this->ingressos;
    }
    public function setIngressos($ingressos){
      $this->ingressos = $ingressos;
    }
    public function venderIngressos($ingressosVendidos){
      echo " *******\n Verificando disponibilidade de ingressos...\n ********\n {$this->ingressos} ingressos disponíveis!\n ********\n";
      if($this->ingressos >= $ingressosVendidos){
        $this->ingressos -= $ingressosVendidos;
        echo " Venda realizada com sucesso!\n ********\n";
        return 1;
      } else {
        echo " Não há ingressos disponíveis!\n ********\n";
        return 0;
      }
    }
  }

  class Cliente {
    private $cpf;
    private $ingressos = 0;
    private $filme;

    public function __construct($cpf, $filme){
      $this->cpf = $cpf;
      $this->filme = $filme;
    }
    public function getFilme(){
      return $this->filme;
    }
    public function getCpf(){
      return $this->cpf;
    }
    public function getIngressos(){
      return $this->ingressos;
    }
    public function setFilme($filme){
      $this->filme = $filme;
    }
    public function setCpf($cpf){
      $this->cpf = $cpf;
    }
    public function comprarIngressos($qt_ingressos){
      $filme = $this->getFilme();
      $venda = $filme->venderIngressos($qt_ingressos);
      if ($venda) {
        $this->ingressos += $qt_ingressos;
      }
    }
  }

  $filme1 = new Filme("Acolhida", "Sala 1", 100);
  $cliente1 = new Cliente("123.456.789-00", $filme1);
  $cliente1->comprarIngressos(5);
?>
