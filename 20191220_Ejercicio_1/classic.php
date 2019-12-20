<?php

class Classic extends Cuenta{

  function __construct($cbu)
  {
    parent::__construct($cbu);
  }

  public function debitar($monto,$origen){
    switch ($origen) {
      case $fuentes['Banelco']:
        parent::setBalance(parent::getBalance() - $monto*1.05);
        break;
      case $fuentes['Link']:
        parent::setBalance(parent::getBalance()  $monto*1.1);
        break;
      default:
        parent::setBalance(parent::getBalance() - $monto);
        break;
    }
  }

  public function acreditar($monto){
    parent::acreditar($monto*0.95);
  }

}


 ?>
