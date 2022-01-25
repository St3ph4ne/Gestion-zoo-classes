<?php

abstract class Animal {

  public static int $count = 0;

  function __construct(){
    self::$count ++;
  }

  function __destruct(){
  }


}