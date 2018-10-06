<?php
class DBConnection{
  private $con;
  private $con_str;

  public function __construct(){
  }

  public function connect(string $constring): string{
    return "Connected! with connection {$constring}";
  }

  private function function_name(){
  }
}