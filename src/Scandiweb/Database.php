<?php

namespace Scandiweb;

use PDO;
use PDOException;

class Database
{
    public $db;

    public function __construct()
    {
        try {
            $db = new PDO('mysql:host=' . HOST . ';port=3306;dbname=' . DATABASE . ';charset=utf8', USERNAME, PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC]);
            $this->db = $db;
        } catch (PDOException $pe) {
            echo $pe->getMessage();
        }
    }


}