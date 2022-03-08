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

    public function getAll()
    {
        $pre = $this->db->prepare('SELECT * FROM products');
        $pre->execute();
        return $pre->fetchAll();
    }

    public function deleteById($id)
    {
        $pre = $this->db->prepare('DELETE FROM products WHERE id = ' . $id);
        $pre->execute();
    }

    public function createNew($req)
    {
        $pre = $this->db->prepare('INSERT INTO products (sku, name, price, attr) VALUES (?,?,?,?)');
        $pre->execute([$req['sku'], $req['name'], $req['price'], $req['attr']]);
    }
}