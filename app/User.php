<?php

/***
 * Classe User
 * Classe mère assurant la gestion des utilisateurs
 */

class User {
    private $id;
    private $login;
    private $password;
    private $type_utilisateur;

    /**
     * User constructor.
     */
    function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    /**
     * @param $user
     * @param $password
     */
    public function connexion($user,$password) {

    }

    // Getters

    /**
     * Getter
     * @return integer l'id de l'utilisateur
     */
    public function id() {
        return $this->id;
    }

    /**
     * Getter
     * @return string login de l'utilisateur
     */
    public function login() {
        return $this->login;
    }

    /**
     * Getter
     * @return mixed
     *
     */
    public function mdp() {
        return $this->password;
    }

    /**
     * Getter
     * @return mixed
     */
    public function type_utilisateur() {
        return $this->type_utilisateur;
    }

    // Setters

    /**
     * Setter
     * @param $id change l'id de l'utilisateur
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Setter
     * @param $login change le login de l'utilisateur
     */
    public function setLogin($login) {
        $this->login = $login;
    }

    /**
     * Setter
     * @param $type change de type de l'utilisateur
     */
    public function setType_utilisateur($type) {
        $this->type_utilisateur = $type;
    }

    /**
     * Setter
     * @param $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Setter
     * @param array $donnees
     */
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value)
        {
          $method = 'set'.ucfirst($key); // on récupère le nom du setter
          
          if(method_exists($this, $method)) // si le setter existe alors
          {
              $this->$method($value); // Appelle le setter correspondant a la valeur du tableau trouvé
          }
        }
    }

    

}


?>