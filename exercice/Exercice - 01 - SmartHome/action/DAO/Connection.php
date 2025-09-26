<?php
    

    class Connection {
        // ici on decaler une variable static qui est propre a la classe connection
        // la seul maniere de acceder a cette variable c'est avec l'operateur scope (::) -> Connection::$connection
        private static $connection;

        public static function getConnection(){
            // si la variable est vide
            if(empty(Connection::$connection)) {
                Connection::$connection = new PDO(DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            return Connection::$connection;
        }
    }