<?php

namespace Scandiweb;

class DVD extends Model
{
    public function add($req)
    {
        $this->setSku($req['sku']);
        $this->setName($req['name']);
        $this->setPrice($req['price']);
        $this->setAttr($req['size'] . ' MB');
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