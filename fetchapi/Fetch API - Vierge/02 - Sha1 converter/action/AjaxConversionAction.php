<?php
    require_once("action/CommonAction.php");

    class AjaxConversionAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = sha1($_POST["mot"]);
            return compact("result");
        }
    }