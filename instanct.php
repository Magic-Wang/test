<?php
class bd{
    private static $intance;
    private function __clone(){

    };
    private function __construct(){

    }
    public static function getInstanceOf(){
        if(!self::$intance instanceof self){
              self::$instance  = new self;
              return $instance;
        }
    }
}