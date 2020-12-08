<?php


class DaoError
{

    private $_db;

    /**
     * DaoError constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->_db = $db;
    }
}