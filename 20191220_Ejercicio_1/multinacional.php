<?php

/**
 *
 */
class Multinacional extends Cliente
{
  Protected $cuit;
  Protected $razonSocial;
  Protected $domicilioFiscal;
  Protected $nacionOrigen;


  public function __construct($email,$pass,$nacionOrigen,$domicilioFiscal,$razonSocial,$cuit){
  {
    parent::__construct($email,$pass);
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;
    $this->domicilioFiscal = $domicilioFiscal;
    $this->nacionOrigen = $nacionOrigen;
  }
}

  public function getCuit(){
    return $cuit;
  }

  public function getRazonSocial(){
    return $razonSocial;
  }

  public function getDomicilioFiscal(){
    return $domicilioFiscal;
  }

  public function getNacionOrigen(){
    return $nacionOrigen;
  }


 ?>
