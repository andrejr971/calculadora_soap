<?php 
  class Client {    
    private $instance;

    public function __construct() {
      $this->instance = new SoapClient( 'http://www.dneonline.com/calculator.asmx?wsdl');
    }

    public function getInstance() {
      return $this->instance;
    }
  }
?>