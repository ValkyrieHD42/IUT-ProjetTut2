<?php

require ('../pages/ConnexionError.php');


class BadPasswordError
{

   private $db ;


    /**
     * BadPasswordError constructor
     */
    public function __construct($db) {

        $this->db = $db;
    }

    /**
     *  fonction qui vérifie si le mot de passe corespond a celui de l'utilsateur dans la bd
     * @param $login
     * @param $psw
     * @return bool
     */
    public function checkPassword($login, $psw){


        $req1 = $this->db->query('Select password from utilisateur 
                                    where login = "'. $login .' ";');
        $realpsw = $req1->fetch();

        //echo $realpsw[0];

        if (!password_verify($psw,$realpsw[0])) //vérifie si les deux mdp sont les meme avec le cryptage
        {
            $pageWrongPsw = new ConnexionError('Le mot de passe transmis est incorect !');
            $res = false;
        }
        else
        {
            $res = true;
        }
        return $res;
    }
}