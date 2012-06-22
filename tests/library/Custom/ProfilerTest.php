<?php
require_once(APPLICATION_LIBRARY . '/Custom/Profiler/Adapter/Standard.php');
require_once(APPLICATION_LIBRARY . '/Custom/Profiler.php');

class Test_Custom_Profiler extends BaseTestCase
{

    /**
     * @var Custom_Profiler
     */
    protected $_object;

    /**
     * Setup
     */
    public function setUp()
    {
        $adapter = new Custom_Profiler_Adapter_Standard;
        $this->_object = new Custom_Profiler($adapter);
    }

    /**
     * Check setup was correct
     */
    public function testObjectInstance()
    {
        $this->assertEquals(true, $this->_object instanceof Custom_Profiler);
    }

    /**
     * Test get profile static method is empty
     */
    public function testStaticProfilesIsEmpty()
    {
        $profiles = Custom_Profiler::getProfiles();
        $this->assertEquals(true, empty($profiles));
        $this->assertEquals(array(), Custom_Profiler::getProfiles());
    }

    /**
     * Test get adapter
     */
    public function testGetAdapter()
    {
        $this->assertEquals(true, $this->_object->getAdapter() instanceof Custom_Profiler_Adapter_Interface);
        $this->assertEquals(true, $this->_object->getAdapter() instanceof Custom_Profiler_Adapter_Standard);
    }

    public function testAddProfileWithNoParams()
    {
        $addProfile = $this->_object->addProfile();
        $this->assertEquals(true, $addProfile instanceof Custom_Profiler);

        $profiles = Custom_Profiler::getProfiles();
        $this->assertEquals(true, is_array($profiles));
        $this->assertEquals(1, count($profiles));
        $this->assertEquals(true, $profiles[0] instanceof Custom_Profiler_Adapter_Standard);
    }

    public function testAddProfileWithProfile()
    {
        $adapter = new Custom_Profiler_Adapter_Standard;
        $addProfile = $this->_object->addProfile($adapter);
        $this->assertEquals(true, $addProfile instanceof Custom_Profiler);

        $profiles = Custom_Profiler::getProfiles();
        $this->assertEquals(true, is_array($profiles));
        $this->assertEquals(1, count($profiles));
        $this->assertEquals(true, $profiles[0] instanceof Custom_Profiler_Adapter_Standard);
    }

    public function testGetMultipleProfiles()
    {
        $adapter = new Custom_Profiler_Adapter_Standard;
        $profiler = new Custom_Profiler($adapter);
        $profiler->addProfile();

        $profiler = new Custom_Profiler($adapter);
        $profiler->addProfile($adapter);

        $profiles = Custom_Profiler::getProfiles();
        $this->assertEquals(true, is_array($profiles));
        $this->assertEquals(2, count($profiles));
        $this->assertEquals(true, $profiles[0] instanceof Custom_Profiler_Adapter_Standard);
        $this->assertEquals(true, $profiles[1] instanceof Custom_Profiler_Adapter_Standard);
    }




}