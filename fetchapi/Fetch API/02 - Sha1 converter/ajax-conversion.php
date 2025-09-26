<?php
    require_once("action/AjaxConversionAction.php");

    $action = new AjaxConversionAction();
    $data = $action->execute();

    echo json_encode($data["result"]);