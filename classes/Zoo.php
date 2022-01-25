<?php

class Zoo implements DeliveryInterface {

  private static ?Zoo $instance = null;

  private function __construct(){
  }

  /**
   * livraison d'animaux au zoo, ajout dans spaces :
   */
  function delivery(Deliverable $deliverable): void{
    $deliverable->set();    
  }

  public static function getInstance(): Zoo {
    if(self::$instance === null) self::$instance = new Zoo();
    return self::$instance;
  }
}