<?php

/**
 * Class: FrontController
 *
 * Works as a router for all the requests coming from the clients.
 */
class FrontController {

  $controller = "";
  $params = "";
  $action = "";

  public function __construct(){

  }

  public function setController(){

  }

  public function setAction(){

  }

  public function setParams(){

  }

  /**
   * Parses the incoming URI
   * Extracts the controller names
   * Extracts the params for the controller
   * 
   * @param  String $uri Incoming URI from the client.
   * @return Boolean      True if the controller exists, False if not.
   */
  public function parseUri($uri){
    $uri = explode("/", $uri);
  }

}


?>