<?php
/**
 * Profiler
 */
class Custom_Profiler
{

    /**
     * @var Custom_Profiler_Adapter_Interface
     */
    protected $_adapter;

    /**
     * @var array
     */
    protected static $_profiles;

    /**
     * Pass adapter on creation
     *
     * @param Custom_Profiler_Adapter_Interface $adapter
     */
    public function __construct(Custom_Profiler_Adapter_Interface $adapter)
    {
        $this->_adapter = $adapter;
    }

    /**
     * Get adapter
     *
     * @return Custom_Profiler_Adapter_Interface
     */
    public function getAdapter()
    {
        return $this->_adapter;
    }

    /**
     * Add profile
     *
     * @param Custom_Profiler_Adapter_Interface $profile
     * @return Custom_Profiler
     */
    public function addProfile(Custom_Profiler_Adapter_Interface $profile)
    {
        self::$_profiles[] = $profile;
        return $this;
    }

    /**
     * Get all profiles
     *
     * @return array
     */
    public static function getProfiles()
    {
        return self::$_profiles;
    }

}