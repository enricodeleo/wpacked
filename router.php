<?php

$root = $_SERVER['DOCUMENT_ROOT'];

chdir($root);

$path = '/'.ltrim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');

set_include_path(get_include_path().':'.__DIR__);

if ( file_exists($root.$path) ) {

  if (is_dir($root.$path) && substr($path,strlen($path) - 1, 1) !== '/') {
    $path = rtrim($path,'/').'/index.php';
  }
  
  if (strpos($path,'.php') === false) {
    return false;
  } 

}

else {
  chdir(dirname($root.$path));
  require_once $root.$path;
}
