<?php
/**
 * Webservice adapter
 */
require_once('Core.php');
require_once('Interface.php');
class Custom_Profiler_Adapter_SoapService extends Custom_Profiler_Adapter_Core implements Custom_Profiler_Adapter_Interface
{

    /**
     * Type of adapter
     *
     * @var string
     */
    protected $_type = 'SoapService';

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
     *
     * @return Custom_Profile_Adapter_Standard
     */
    public function setSoapClient(Zend_Soap_Client $client)
    {
        $this->_client = $client;
        return $this;
    }

    /**
     * Get Soap client
     *
     * @return Zend_Soap_Client
     */
    public function getSoapClient()
    {
        return $this->_client;
    }

    /**
     * Get request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->_client->getLastMethod();
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->_client->getLastResponse();
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return strlen($this->_client->getLastResponse());
    }

}