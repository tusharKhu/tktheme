<?php
/**
 * Boostraps the Theme
 *
 * @package tktheme 
 */

 namespace TKTHEME\Inc;
 use TKTHEME\Inc\Traits\Singleton;

 class TKTHEME {
    use Singleton;

    protected function __construct()
    {
          //load other classes
          $this->set_hooks();
    }

    protected function set_hooks()
    {
        //actions and filters
    }
 }
