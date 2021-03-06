<?php
if(!empty($_POST)) {

    require('../app/ConnexionBDD.php');

    $id = $_POST['id'];
    $resume = $_POST['resume'];
    $details = $_POST['details'];
    switch ($_POST['statut']) {
        case 0:
            $statut = "en cours";
            break;
        case 1:
            $statut = "terminee";
            break;
        case 2:
            $statut = "prevue";
            break;
        case 3:
            $statut = "annulee";
            break;
        default:
            $statut = "en cours";
            break;
    }
    $typeID = $_POST['type'];
    $dureePrev = $_POST['estimate_time'];

    echo "id = " . $id . "/ resume" . $resume . "/ details " . $details . "/ statut " . $statut . "/ type " . $typeID . "/ dure " . $dureePrev;

    $req = $db->prepare('UPDATE activite SET dureePrevue = ?,resume = ?,detail = ?,statut = ? WHERE ID = ?');
    try {
        $req->execute([$dureePrev,$resume,$details,$statut,$id]);
    }
    catch (PDOException $exception) {
        echo $exception->getMessage();
    }

    header("Location:../pages/index.php");
}
