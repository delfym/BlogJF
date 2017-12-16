<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 09/12/2017
 * Time: 16:08
 */
namespace App;


class Autoload {

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $classPath = str_replace(__NAMESPACE__.'\\','/', $class);
            $pos = strpos($classPath, '\\');
            if($pos != 0){
                $classPath = str_replace('\\', '/', $classPath);
                require  __DIR__ . $classPath . '.php';
            } else {
                $classPath = str_replace(__NAMESPACE__ . '\\', '/' . 'Controller' . '/', $class);
                require __DIR__ . $classPath . '.php';
            }
        }
    }
}