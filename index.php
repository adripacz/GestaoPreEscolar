<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
/*
 if(strpos($_SERVER['SERVER_NAME'], 'painel.mobicar.lan') !== false) {
	define('ENVIRONMENT', 'testing');
	
 } elseif(strpos($_SERVER['SERVER_NAME'], 'painel.mobicar.com.br') !== false) {
  define('ENVIRONMENT', 'production'); 	
  
 } else {
  define('ENVIRONMENT', 'development'); 	
 }
 
 
 if($_SERVER['SERVER_ADDR'] == '192.168.1.253'){
  define('ENVIRONMENT', 'production');
 }else{
  define('ENVIRONMENT', 'development');
 }
*/
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

      error_reporting(E_ALL);
    

require __DIR__.'/bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight these users.
|
*/

$app = require_once __DIR__.'/bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have whipped up for them.
|
*/

$app->run();
