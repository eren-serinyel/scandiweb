<?php

namespace Scandiweb;

use PDOException;

class Model extends Database
{
    private string $sku, $name, $price, $attr;

    public function getSku(): string
    {
        return $this->sku;
    }
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getAttr(): string
    {
        return $this->attr;
    }


    public function setAttr(string $attr): void
    {
        $this->attr = $attr;
    }


    public function create($req): bool
    {
        $exists = false;
        $pre = $this->getDb()->prepare('INSERT INTO products (sku, name, price, attr) VALUES (?,?,?,?)');
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
        $pre = $this->getDb()->prepare('DELETE FROM products WHERE id = ' . $id);
        $pre->execute();
    }

    public function all(): bool|array
    {
        $pre = $this->getDb()->prepare('SELECT * FROM products');
        $pre->execute();
        return $pre->fetchAll();
    }
}