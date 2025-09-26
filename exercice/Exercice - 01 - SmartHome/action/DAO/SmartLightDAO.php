<?php
    require_once("action/DAO/Connection.php");
    class SmartLightDAO {

        public static function getLightsStatus() {
            $connection = Connection::getConnection(); //obtient la db complete???
            $listelights = []; 

            $statement = $connection->prepare("SELECT name, status FROM lights"); 

            $statement->execute();

            $allrows = $statement->fetchAll(); 

            $listelights = $allrows;  /////probleme ici 

            // var_dump($listelights); 

            return compact("listelights");
        }

    }