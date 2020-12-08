<?php

class ProjectDAO
{
    private $_db;

    /**
     * ProjectDAO constructor.
     */
    public function __construct() {
        $db = new PDO('mysql:host=localhost; dbname=mydb', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $this->_db = $db;
    }

    public function readProjects($userId) {
        // Réucupération de l'ID technicien
        $req = $this->_db->prepare('SELECT id FROM technicien WHERE UTILISATEUR_ID = ?');
        $req->execute([$userId]);
        $id = $req->fetch(); // $id sous forme de tableau avec ['id']

        $req2 = $this->_db->prepare('SELECT * FROM `projet` WHERE ID IN (SELECT `projetID` FROM `compose` NATURAL JOIN `affect` WHERE technicienID = ?)');
        $req2->execute([$id['id']]);
        $donnes = $req2->fetchAll();

        // Récupération des projets avec id
        /*
        $req2 = $this->_db->prepare('SELECT * FROM projet WHERE ID IN (SELECT projetID FROM compose NATURAL JOIN affecté WHERE technicienID = ?)'); //nom, duréeEstimée, duréeFinale, statut
        $req2->execute([$id['id']]);
        $donnes = $req2->fetchAll();
*/

        return $donnes;
    }
}

?>