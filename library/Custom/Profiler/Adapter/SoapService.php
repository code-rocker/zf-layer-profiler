<?php
/**
 * Webservice adapter
 */
class Custom_Profiler_Adapter_SoapService implements Custom_Profiler_Adapter_Interface
{

    /**
     * Type of adapter
     *
     * @var string
     */
    protected $_type = 'Webservice';

    /**
     * Soap client
     *
     * @var Zend_Soap_Client
     */
    protected $_client;

    /**
     * Set soap client
     *
     * @param Zend_Soap_Client $client
     * @return Custom_Profile_Adapter_Standard
     */
    public function setSoapClient(Zend_Soap_Client $client)
    {
        $this->_client = $client;
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
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->_response;
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