<?php
/**
 * Profiler adapter interface
 */
interface Custom_Profiler_Adapter_Interface
{

    /**
     * Set request
     *
     * @abstract
     * @param string $request
     * @return Custom_Profiler_Adapter_Interface
     */
    public function setRequest($request);

    /**
     * Get request
     *
     * @abstract
     * @return string
     */
    public function getRequest();

    /**
     * Set response
     *
     * @abstract
     * @param string $response
     * @return Custom_Profiler_Adapter_Interface
     */
    public function setResponse($response);

    /**
     * Get response
     *
     * @abstract
     * @return string
     */
    public function getResponse();

    /**
     * Set size
     *
     * @abstract
     * @param int $size
     * @return Custom_Profiler_Adapter_Interface
     */
    public function setSize($size);

    /**
     * Get size
     *
     * @abstract
     * @return int
     */
    public function getSize();



}