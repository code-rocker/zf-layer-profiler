<?php
/**
 * Test standard adapter
 */
require_once(APPLICATION_LIBRARY . '/Custom/Profiler/Adapter/Standard.php');

class Test_Custom_Profiler_Adapter_Standard extends BaseTestCase
{

    /**
     * @var Custom_Profiler_Adapter_Standard
     */
    public $_object;

    public function setUp()
    {
        $this->_object = new Custom_Profiler_Adapter_Standard;
    }

    /**
     * Test request
     */
    public function testRequest()
    {
        $this->_object->setRequest('abc');
        $this->assertEquals('abc', $this->_object->getRequest());
    }

    /**
     * Test response
     */
    public function testResponse()
    {
        $this->_object->setResponse('abc');
        $this->assertEquals('abc', $this->_object->getResponse());
    }

    /**
     * Test size
     */
    public function testSize()
    {
        $this->_object->setSize(123);
        $this->assertEquals(123, $this->_object->getSize());
    }

}