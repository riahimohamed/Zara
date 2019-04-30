<?php

namespace App;

class Config{

    private $setting = [];
    private static $_instance;

    public static function getInstance($config_file){
        if(is_null(self::$_instance)) {
            self::$_instance = new Config($config_file);
        }
        return self::$_instance;
    }

    public function __construct($config_file){
        $this->setting = require($config_file);
    }

    public function get($key){
        if(!isset($this->setting[$key])){
            return null;
        }
        return $this->setting[$key];
    }
}