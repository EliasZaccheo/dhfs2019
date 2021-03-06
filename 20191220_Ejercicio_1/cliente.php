<?php

include_once(cuenta.php);

abstract Class Cliente{

  Private $email;
  Private $pass;
  Protected $cuenta;

//Creo una función constructora con sus parámetros necesarios


  public function __construct($email,$pass, $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    if ( $cuenta instanceOf Cuenta){
      $this->$cuenta = $cuenta;
    }else{
      break;
    }
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  abstract public function comprar();
  }
