<?php
/**
 * @package PHP Stack Framework
 * @author Samitha Hewawasam(underscore) <samithahewawasam@gmail.com>
 * @copyright	Copyright (c) 2015 - 2015, Doers, Inc
 * @since 2015-11-13
 * @category	AutoLoader
 * @version 1.0
 */

namespace Stack\Application;

/**
 * @var ROOT = 'var/www';
 */

define('ROOT', __DIR__);

class AutoLoader
{

    private static $pos = false;
    private static $namespace_path = NULL;
    private static $namespace_name = NULL;
    private static $file = NULL;

    /**
     * Set qualified name Stack\Application
     */

    public static function register()
    {
        spl_autoload_register('Stack\Application\AutoLoader::useNamespace');
    }

    public function unregister()
    {
        spl_autoload_unregister('Stack\Application\AutoLoader::useNamespace');
    }

    private static function useNamespace($namespace)
    {

        /**
         * @var $namespace namespace name
         * @var $pos — Find the position of the last occurrence of a class in a fully qulified $namespace
         */

        if (false !== $pos = strrpos($namespace, '\\')) {
            $pos            = strrpos($namespace, '\\');
            $namespace_path = str_replace('\\', DIRECTORY_SEPARATOR, substr($namespace, 0, $pos)) . DIRECTORY_SEPARATOR;
            $namespace_name = substr($namespace, $pos + 1);
            $file           = ROOT . DIRECTORY_SEPARATOR . '../..' . DIRECTORY_SEPARATOR . $namespace_path . $namespace_name . '.php';

            if (!file_exists($file)) {
                return false;
            }
            include $file;

        }

    }

}
