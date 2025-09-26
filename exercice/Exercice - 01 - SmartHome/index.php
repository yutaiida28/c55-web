<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();
    $statut = "off";

    require_once("partial/header.php");
    // array(6) {  [0]=> array(4) { ["name"]=> string(6) "light1" [0]=> string(6) "light1" ["status"]=> int(1) [1]=> int(1) }
    //             [1]=> array(4) { ["name"]=> string(6) "light2" [0]=> string(6) "light2" ["status"]=> int(0) [1]=> int(0) }
    //             [2]=> array(4) { ["name"]=> string(6) "light3" [0]=> string(6) "light3" ["status"]=> int(1) [1]=> int(1) }
    //             [3]=> array(4) { ["name"]=> string(6) "light4" [0]=> string(6) "light4" ["status"]=> int(1) [1]=> int(1) }
    //             [4]=> array(4) { ["name"]=> string(6) "light5" [0]=> string(6) "light5" ["status"]=> int(0) [1]=> int(0) }
    //             [5]=> array(4) { ["name"]=> string(6) "light6" [0]=> string(6) "light6" ["status"]=> int(1) [1]=> int(1) } } 
?>
    <main>
        <div id="house">
           <?php    
                for($i = 0; $i < count($data["listelights"]["listelights"]); $i++) {
                    $singleLight = $data["listelights"]["listelights"][$i];
                    $statut = $singleLight["status"] == 1 ? "on" : "off";
            ?>
                <img src="img/light-<?=$statut?>.png" alt="light<?=$i+1?>" id="light<?=$i+1?>">
            <?php
            }
            ?>
        </div>
            <!-- <img src="img/.png" alt="light1" id="light1">
            <img src="img/light-off.png" alt="light2" id="light2">
            <img src="img/light-off.png" alt="light3" id="light3">
            <img src="img/light-off.png" alt="light4" id="light4">
            <img src="img/light-off.png" alt="light5" id="light5">
            <img src="img/light-off.png" alt="light6" id="light6">
        </div> -->
    </main>
<?php
    require_once("partial/footer.php");