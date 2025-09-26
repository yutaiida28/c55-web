<?php
    require_once("action/DAO/Connection.php");

    class AnswerDAO {
        public static function getAnswers(){
            $connection = Connection::getConnection();
            $answers = [];
            $statement = $connection->prepare("SELECT author, answer FROM stack_answers"); 
            $statement->execute();
            return $statement->fetchAll();
        }
        public static function addAnswer($author, $answer){
            $connection =  Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO stack_answers(author, answer) VALUES (?,?)");

            $statement->bindParam(1, $author);
            $statement->bindParam(2, $answer);

            $statement -> execute();

            // faut tu fair un return??????
        }
    }