<?php
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../library'),
    get_include_path(),
)));

defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'testing');
defined('APPLICATION_LIBRARY') || define('APPLICATION_LIBRARY', realpath(dirname(__FILE__) . '/../library'));
//defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();

/**
 * Base Test Class
 */
abstract class BaseTestCase extends PHPUnit_Framework_TestCase
{

    public function setUp() {
        parent::setUp();
    }

    public function tearDown() {

    }

}
