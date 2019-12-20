<?php

abstract class Cuenta
{
    protected $cbu;
    protected $balance;
    protected $fechaUltimoMovimiento
    protected $banco;
    static protected $fuentes = [
      'Link'=>'Cajero Red Link',
      'Banelco'=> 'Cajero Red Banelco',
      'Caja' => 'Caja común',
      'MercadoPago' => 'Mercadopago'
    ]

function __construct($cbu)
  {
    $this->cbu=$cbu;
    $this->$saldo=0.0;
  }

    public function getCbu(){
        return $this->cbu;
    }

    Protected function setBalance($balance){
        $this->balance = $balance;
        return $this;
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBanco($banco){
        $this->banco = $banco;
        return $this;
    }

    public function getBanco(){
        return $this->banco;
    }

    abstract public function debitar($monto,$origen)

    public function acreditar($monto){
      $this->saldo= $this->saldo + $monto;
      $this->fechaUltimoMovimiento = date("Y-m-d H:i:s");
    }

    abstract public function cobrarServicios($monto,$origen)


}
 ?>
