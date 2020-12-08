<?php
/**
 * Classe Enumération des états possible d'une activitée.
 */


class ActivityState
{

    private $_states;


    /**
     * ActivityState constructor.
     */
    public function __construct()
    {

        $this->_states = array("PREVUE" => 0, "ENCOURS" => 1, "TERMINEE" => 2, "ANNULE" => 3);
    }

    /**
     * @return int[]
     */
    public function getStates(): array
    {
        return $this->_states;
    }




}

