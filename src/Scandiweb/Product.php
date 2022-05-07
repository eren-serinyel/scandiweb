<?php

namespace Scandiweb;

class Product extends Model
{
    public function index()
    {
        $products = $this->all();
        require 'templates/list.php';
    }

    public function createIndex()
    {
        require 'templates/add.php';
    }

    public function store()
    {
        $product = '\\Scandiweb\\' . $_REQUEST['productType'];
        $product = new $product();
        $product->add($_REQUEST);
        $this->index();
    }

    public function destroy()
    {
        foreach ($_REQUEST as $req) {
            $this->delete($req);
        }
        $this->index();
    }
}