<?php

    spl_autoload_register(function ($class) {
        $class = str_replace('Classes','Interface', $class);
        require_once(str_replace('\\','/', $class.'.php'));
    });

?>