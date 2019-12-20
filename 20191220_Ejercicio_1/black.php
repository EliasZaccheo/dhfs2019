<?php

class Black extends Cuenta{

  function __construct($cbu)
  {
    parent::__construct($cbu);
  }


  public function debitar($monto,$origen){
    parent::setBalance(parent::getBalance() - $monto);
  }

  public function acreditar($monto){
    if ($monto>1000000){
      parent::acreditar($monto*0.96);
    }else{
      parent::acreditar($monto);
    }
  }

}


 ?>
