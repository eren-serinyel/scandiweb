<?php

namespace Scandiweb;

class Book extends Model
{
    public function add($req)
    {
        $this->sku = $req['sku'];
        $this->name = $req['name'];
        $this->price = $req['price'];
        $this->attr = $req['weight'] . ' KG';
        $create = $this->create($req);
        if ($create) {
            die("This product with sku is already exists");
        }
    }

    public function delete($id)
    {
        $this->delete($id);
    }
}