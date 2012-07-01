<?php
/**
 * Adapter Core
 */
class Custom_Profiler_Adapter_Core
{

    /**
     * Name
     *
     * @var string
     */
    protected $_name;

    /**
     * Start time
     *
     * @var int
     */
    protected $_startTime;

    /**
     * End time
     *
     * @var int
     */
    protected $_endTime;

    /**
     * @var array
     */
    protected static $_profiles = array();

    /**
     * Adapter type
     *
     * Should be overwritten with child adapter
     *
     * @var string
     */
    protected $_type = 'Replace with adapter type';

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Custom_Profiler_Adapter_Core
     */
    public function setName($name)
    {
        $this->_name = (string)$name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set start time
     *
     * @param int $time
     *
     * @return Custom_Profiler_Adapter_Core
     */
    public function setStartTime($time)
    {
        $this->_startTime = (int)$time;
        return $this;
    }

    /**
     * Get start time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->_startTime;
    }

    /**
     * Set end time
     *
     * @param int $time
     *
     * @return Custom_Profiler_Adapter_Core
     */
    public function setEndTime($time)
    {
        $this->_endTime = (int)$time;
        return $this;
    }

    /**
     * Get end time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->_endTime;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        $duration = $this->getEndTime() - $this->getStartTime();
        return $duration;
    }

}