<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className) {
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $path = (strpos($url, 'includes') !== false) ? "../classes/" : "./classes/";
  $extension = ".php";
  $fileName = $path . $className . $extension;

  if (!file_exists($fileName)) {
    return false;
  }
  
  require_once $fileName;
}