<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AnswerDAO.php");
    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $answers = [];
            if(isset($_POST["author"])){
                $author = $_POST["author"];
                $answer = $_POST["answer"];
                AnswerDAO::addAnswer($author, $answer);
            } 
            $answers = AnswerDAO::getAnswers();

            return compact("answers");
        }
    }