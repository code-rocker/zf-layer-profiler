<?php
/**
 * Profile adapter standard
 */
require_once('Core.php');
require_once('Interface.php');
class Custom_Profiler_Adapter_Standard extends Custom_Profiler_Adapter_Core implements Custom_Profiler_Adapter_Interface
{

    /**
     * @var string
     */
    protected $_type = 'Standard';

    /**
     * Set request
     *
     * @param string $request
     * @return Custom_Profile_Adapter_Standard
     */
    public function setRequest($request)
    {
        $this->_request = (string) $request;
        return $this;
    }

    /**
     * Get request
     *
     * @return string
     */
    public function getRequest(){
        return $this->_request;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Custom_Profile_Adapter_Standard
     */
    public function setResponse($response)
    {
        $this->_response = (string) $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->_response;
    }

    /**
     * Set size
     *
     * @param int $size
     * @return Custom_Profile_Adapter_Standard
     */
    public function setSize($size)
    {
        $this->_size = (int) $size;
        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->_size;
    }


}