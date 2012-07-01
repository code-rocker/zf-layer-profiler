<?php
require_once(APPLICATION_LIBRARY . '/Custom/Profiler/Adapter/Core.php');

class Test_Custom_Profiler_Adapter_Core extends BaseTestCase
{

    /**
     * @var Custom_Profiler_Adapter_Core
     */
    protected $_object;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->_object = new Custom_Profiler_Adapter_Core;
    }

    /**
     * Test name
     */
    public function testName()
    {
        $this->_object->setName('testName');
        $this->assertEquals('testName', $this->_object->getName());
    }

    /**
     * Test start time
     */
    public function testStartTime()
    {
        $this->_object->setStartTime(123);
        $this->assertEquals(123, $this->_object->getStartTime());
    }

    /**
     * Test end time
     */
    public function testEndTime()
    {
        $this->_object->setEndTime(456);
        $this->assertEquals(456, $this->_object->getEndTime());
    }

    /**
     * Test get type
     */
    public function testGetType()
    {
        $this->assertEquals('Replace with adapter type', $this->_object->getType());
    }

    /**
     * Test duration
     */
    public function testDuration()
    {
        $this->_object->setStartTime(123);
        $this->_object->setEndTime(456);
        $this->assertEquals(456 - 123, $this->_object->getDuration());
    }


}