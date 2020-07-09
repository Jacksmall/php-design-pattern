<?php
/**
 * SingletonPattern.php
 * The singleton pattern example
 *
 * @package  Jacksmall\Singleton
 * @link     php-design-pattern
 * @datetime 2020/7/9 09:20
 */

namespace Jacksmall\Singleton;

class SingletonPattern
{
    /**
     * Save the instance
     */
    private static $instance;

    /**
     * SingletonPattern constructor.
     *
     * Prevent external creation of instances
     */
    private function __construct() {}

    /**
     * Prevent copying instances
     */
    private function __clone() {}

    /**
     * External needs to call this method to instantiate the object
     *
     * @return SingletonPattern
     */
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
