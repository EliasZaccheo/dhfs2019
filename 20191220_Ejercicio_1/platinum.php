<?php

class Platinum extends Cuenta{

  function __construct($cbu)
  {
    parent::__construct($cbu);
  }


  public function debitar($monto,$origen){
    if (parent::getBalance()<5000){
      parent::setBalance(parent::getBalance() - $monto*1.05);
    }else{
      parent::setBalance(parent::getBalance() - $monto);
    }
  }


}


 ?>
