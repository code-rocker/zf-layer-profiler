<?php
/**
 * Test soap service adapter
 */
require_once(APPLICATION_LIBRARY . '/Custom/Profiler/Adapter/SoapService.php');

class Test_Custom_Profiler_Adapter_SoapService extends BaseTestCase
{

    public $_object;
    public $_client;

    public function setUp()
    {
        $this->_client = new Zend_Soap_Client;
        $this->_object = new Custom_Profiler_Adapter_SoapService;
        $this->_object->setSoapClient($this->_client);
    }

    /**
     * Test request
     */
    public function testRequest()
    {
        $this->assertEquals(true, $this->_object->getSoapClient() instanceof Zend_Soap_Client);
    }

    /**
     * Test get request is a string
     */
    public function testGetRequest()
    {
        $this->assertEquals(true, is_string($this->_object->getRequest()));
    }

    /**
     * Test get response is a string
     */
    public function testGetResponse()
    {
        $this->assertEquals(true, is_string($this->_object->getResponse()));
    }

    /**
     * Test get size is an int
     */
    public function testGetSize()
    {
        $this->assertEquals(true, is_int($this->_object->getSize()));
    }

}