<?php

/**
 *
 */
class PYME extends Cliente
{
  Protected $cuit;
  Protected $razonSocial;
  Protected $domicilioFiscal;

  public function __construct($email,$pass){
  {
    parent::__construct($email,$pass,$domicilioFiscal,$razonSocial,$cuit);
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;
    $this->domicilioFiscal = $domicilioFiscal;
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


 ?>
