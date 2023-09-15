<?php

namespace Config {

    use PDO;

    class Database
    {

        public static function getConnection(): PDO
        {
            $host = '127.0.0.1';
            $port = 3306;
            $database = "php_todolist";
            $username = "root";
            $password = "password";

            return new PDO("mysql:host=$host:$port;dbnames=$database", $username, $password);
        }
    }
}
