<?php

namespace :uc:vendor\:uc:package;

class :uc:package
{
    /**
     * Package config
     * 
     * @var array
     */
    protected $config;
    
    /**
     * Initialize the object
     * 
     * @param array $config package config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    // Build wonderful things
}