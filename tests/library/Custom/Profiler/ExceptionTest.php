<?php
require_once(APPLICATION_LIBRARY . '/Custom/Profiler/Exception.php');

class Test_Custom_Profiler_Exception extends BaseTestCase
{

    /**
     * Test exception
     */
    public function testException()
    {
        $this->assertTrue(new Custom_Profiler_Exception() instanceof Exception);
        $this->assertTrue(new Custom_Profiler_Exception() instanceof Custom_Profiler_Exception);
    }

}