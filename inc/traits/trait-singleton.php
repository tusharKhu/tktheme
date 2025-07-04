<?php

namespace TKTHEME\Inc\Traits;

trait Singleton {
    public function __construct()
    {

    }

    //It prevents object cloning    
    public function __clone()
    {

    }

    final public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if(! isset($instance[$called_class]))
        {
            $instance[$called_class]= new $called_class();
            do_action( sprintf('tktheme_singleton_init%s', $called_class));
        }

        return $instance[$called_class];    
    }
}