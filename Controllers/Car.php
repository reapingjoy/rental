<?php

class Car extends Controller {

  public function index(){
    echo "Nedko Success!";
  }

  public function show(){
    echo "Nedko Show";
  }

  public function getCars(){
    $cars = array();
    $cars = [1,4,6,7];
    print_r($cars);
  }

}

?>