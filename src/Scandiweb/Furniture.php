<?php

namespace Scandiweb;

class Furniture extends Model
{
    public function add($req)
    {
        $this->sku = $req['sku'];
        $this->name = $req['name'];
        $this->price = $req['price'];
        $this->attr = $req['height'] . 'x' . $req['width'] . 'x' . $req['length'];
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