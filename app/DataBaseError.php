<?php


class DataBaseError
{

    private $_db;

    /**
     * DataBaseError constructor.
     * @param $db
     */
    public function __construct($db) {
        $this->_db = $db;
    }
}