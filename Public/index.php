<?php
  
  defined('BASEPATH') or define('BASEPATH', dirname(realpath(__FILE__)) . '/../' );
  defined('PKGPATH')  or define('PKGPATH', BASEPATH . "Packages/");
  defined('COREPATH') or define('COREPATH', PKGPATH . "Bigbang/");
  defined('APPPATH')  or define('APPPATH', PKGPATH . "App/");

  if( !function_exists("autoloader_bootstrap")){
    function autoloader_bootstrap(){
      require(COREPATH . 'Classes/Autoloader.php')
    }
  }