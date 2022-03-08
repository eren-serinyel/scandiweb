<?php

namespace Scandiweb;

class DVD extends Product
{
    public function add($req)
    {
        $req['attr'] = $req['size'] . ' MB';
        $this->createNew($req);
        $products = $this->getAll();
        require 'templates/list.php';
    }
}