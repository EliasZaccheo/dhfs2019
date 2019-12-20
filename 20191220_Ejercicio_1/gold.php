<?php

class Gold extends Cuenta{

  function __construct($cbu)
  {
    parent::__construct($cbu);
  }


  public function debitar($monto,$origen){
    switch ($origen) {
      case $fuentes['Link']:
        parent::setBalance(parent::getBalance() - $monto*1.05);
        break;
      default:
        parent::setBalance(parent::getBalance() - $monto);
      break;
    }
  }

  public function acreditar($monto){
    if ($monto<25000){
      parent::acreditar($monto*0.97);
    }else{
      parent::acreditar($monto);
    }
  }


}


 ?>
