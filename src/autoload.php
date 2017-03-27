<?php 

    function getLoader()
    {
        spl_autoload_register(function($class)
        {
            $route = str_replace("\\","/", $class). ".php";
            include $route;
        });
    }
    getLoader();