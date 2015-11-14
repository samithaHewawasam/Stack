<?php
/**
 * @link PHP Stack Framework
 * @author Samitha Hewawasam(underscore) <samithahewawasam@gmail.com>
 * @since 2015-11-13
 * @version 1.0
 */

 namespace Stack\Application;

 define('ROOT', __DIR__);

 class AutoLoader
 {

   /**
    * Set qualified name Stack\Application
    */

   public static function register(){
     spl_autoload_register('Stack\Application\AutoLoader::useNamespace');
   }

   public function unregister(){
     spl_autoload_unregister('Stack\Application\AutoLoader::useNamespace');
   }

   private static function useNamespace($namespace){


   }

 }
