<?php

trait singleton {

    public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class(); //it do late binding 

        if(! isset($instance[ $called_class]))
        {
            $instance[$called_class] = new $called_class;
        }

        return $instance[ $called_class];
    }
}

class User{
    use singleton;
    

    public function __construct()
    {
        echo 'User';
    }
}

$user = User::get_instance();
