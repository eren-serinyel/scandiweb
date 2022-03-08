<?php

namespace Scandiweb;

class Book extends Product
{
    public function add($req)
    {
        $req['attr'] = $req['weight'] . ' KG';
        $this->createNew($req);
        $products = $this->getAll();
        require 'templates/list.php';
    }
}