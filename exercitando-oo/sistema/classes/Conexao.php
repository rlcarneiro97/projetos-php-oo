<?php

    class Conexao
    {
        private static $instance;

        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                self::$instance = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
            }

            return self::$instance;
        }
    }

?>