<?php

namespace Scandiweb;

class Book extends Model
{
    public function add($req)
    {
        $this->setSku($req['sku']);
        $this->setName($req['name']);
        $this->setPrice($req['price']);
        $this->setAttr($req['weight'] . ' KG');
        $create = $this->create($req);
        if ($create) {
            header("refresh:0;url=about:blank" );
            exit();
        }
    }

    public function delete($id)
    {
        $this->delete($id);
    }
}