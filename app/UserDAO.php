<?php

require('User.php');

class UserDAO
{
    private $_db;

    /**
     * UserDAO constructor.
     * @param $db
     */
    public function __construct() {
        $db = new PDO('mysql:host=localhost; dbname=mydb', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $this->_db = $db;
    }

    /**
     * @param $log
     * @return Compte|null
     */
    public function getLogin($log) {
        $login = (string) $log;

        $requete = $this->_db->query('SELECT id,login,password,type_utilisateur FROM UTILISATEUR WHERE login="' . $login . '"'); //Request
        $donnes = $requete(PDO::FETCH_ASSOC); // On récup les éléments dans un tableau
        if ($donnes!=null) {    //Si on trouve quelque chose
            $cpt = new Compte($donnes); // On créer l'utilisateur
            return $cpt;
        } else {
            return null;
        }
    }

    /**
     * Permet d'ajouter un utilisateur
     * Demande qu'une instance d'USer ait été créer avant
     * @param User $utilisateur
     */
    public function add(User $utilisateur) {

        $req1 = $this->_db->query('Select count(id) from utilisateur;');
        $nbID = $req1->fetch();

        $req2 = $this->_db->prepare('insert into Utilisateur values(?,?,?,?);');

        $mdp = (string)$utilisateur->mdp();
        $login = (string) $utilisateur->login();
        $typeU = (string) $utilisateur->type_utilisateur();

        $req2->execute([($nbID[0] +1), $login,$mdp, $typeU]);


    }

    /**
     * Permet de changer son mdp (ou toute autre valeur sauf l'id)
     * Demande que l'objet User ait été changé avant
     * @param User $utilisateur
     */
    public function update(User $utilisateur) {

        $mdp = (string)$utilisateur->mdp();
        $login = (string) $utilisateur->login();
        $typeU = (string) $utilisateur->type_utilisateur();
        $id = (string) $utilisateur->id();

        $req = $this->_db->prepare('UPDATE utilisateur
                                SET login = ?,
                                    password = ?,
                                    Type_Utilisateur = ?
                                WHERE ID = "? " ');

        $req->execute([$login,$mdp,$typeU,$id]);



    }

    /**
     * PAS COMPLETER
     * @param $login
     * @param $mdp
     */
    public function read($login, $mdp) {

        // On met toutes les données dans des variables pour faire notre requête

        $login = (string) $login;
        $mdp = (string) $mdp;
        $req = $this->_db->query('SELECT * FROM UTILISATEUR WHERE LOGIN = "' . $login . '"');
        $donnes = $req->fetch();
        $type = $donnes['TYPE_UTILISATEUR'];

         // Lancement de la session
        session_start();
        $u = new User($donnes); // On ajoute les infos de l'utilisateur dans la variables $_SESSION
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['utilisateurId'] = $donnes['ID'];
        $_SESSION['type_utilisateur'] = $type;
        $_SESSION['User'] = $u;
        //var_dump($_SESSION);
    }
}