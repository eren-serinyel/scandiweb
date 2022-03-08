<?php

namespace Scandiweb;

class Product extends Database
{
    public function index()
    {
        $products = $this->getAll();
        require 'templates/list.php';
    }

    public function create()
    {
        require 'templates/add.php';
    }

    public function store()
    {
        $product = '\\Scandiweb\\' . $_REQUEST['productType'];
        $product = new $product();
        $product->add($_REQUEST);
    }

    public function destroy()
    {
        foreach ($_REQUEST as $req) {
            $this->deleteById($req);
        }
        $products = $this->getAll();
        require 'templates/list.php';
    }
}