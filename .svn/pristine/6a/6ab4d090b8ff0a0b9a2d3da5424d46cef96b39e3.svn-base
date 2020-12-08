<?php


class Utils
{
    function __construct()
    {
    }

    /**
     * Fonction qui indique le nombre de travail par jour pour une personne
     * @return entier
     */
    public function getWorkByDay() {
        return int;
    }

    /**
     * Fonction qui retourne vrai ou faux si la chaine de caractère est
     * bien sécurisé ou pas
     * @param $pass mot de passe
     * @return bool Vrai ou faux
     */
    public function isPasswordSafe($pass) {
        (boolean) $res = false;
        if(strlen($pass)>=8) {
            $cptNum = 0;
            $cptMaj = 0;
            for($i=0;$i<strlen($pass);$i++) {
                if($pass[$i]>='A' && $pass[$i]<='Z') {
                    $cptMaj++;
                }
                elseif($pass[$i]>='0' && $pass[$i]<='9') {
                    $cptNum++;
                }
            }
            if(($cptMaj > 0) && ($cptNum) > 0) {
                $res = true;
                echo " ok ultime";
            }
        }
        return $res;
    }
}