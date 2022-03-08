<?php

namespace Scandiweb;

class Furniture extends Product
{
    public function add($req)
    {
        $req['attr'] = $req['height'] . 'x' . $req['width'] . 'x' . $req['length'];
        $this->createNew($req);
        $products = $this->getAll();
        require 'templates/list.php';
    }
}