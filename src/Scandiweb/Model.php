<?php

namespace Scandiweb;

use PDOException;

class Model extends Database
{
    protected string $sku, $name, $price, $attr;

    public function create($req): bool
    {
        $exists = false;
        $pre = $this->db->prepare('INSERT INTO products (sku, name, price, attr) VALUES (?,?,?,?)');
        try {
            $pre->execute([$this->sku, $this->name, $this->price, $this->attr]);
        } catch (PDOException $pe) {
            if ($pe->errorInfo[1] == 1062) {
                $exists = true;
            }
        }
        return $exists;
    }

    public function delete($id)
    {
        $pre = $this->db->prepare('DELETE FROM products WHERE id = ' . $id);
        $pre->execute();
    }

    public function all(): bool|array
    {
        $pre = $this->db->prepare('SELECT * FROM products');
        $pre->execute();
        return $pre->fetchAll();
    }
}
