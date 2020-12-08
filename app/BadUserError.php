<?php


class BadUserError
{

    private $db;

    /**
     * BadUserError constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * vérifie sur l'utilisateur existe
     * @param $login
     * @return bool
     */
    public function check_user($login){

        $req1 = $this->db->query('Select count(id) from utilisateur;');
        $nbUser = $req1->fetch();

        $res = false;



        for ($i =0; $i <= $nbUser[0]; $i++)
        {
            $req2 = $this->db->query('Select login from utilisateur
                                        where ID = " '. $i.'";');

            $loginExist = $req2->fetch();

            if ($login == $loginExist[0])
            {
                $res = true;

            }



        }


        if (!$res)
        {
            $page = new ConnexionError('L\'utilisateur n\'existe pas !');
        }


            return $res;
        }







}

?>