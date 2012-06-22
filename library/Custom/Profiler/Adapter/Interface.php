<?php
/**
 * Profiler adapter interface
 */
interface Custom_Profiler_Adapter_Interface
{

    /**
     * Get request
     *
     * @abstract
     * @return string
     */
    public function getRequest();

    /**
     * Get response
     *
     * @abstract
     * @return string
     */
    public function getResponse();

    /**
     * Get size
     *
     * @abstract
     * @return int
     */
    public function getSize();



}