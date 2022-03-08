<?php

namespace Scandiweb;

class Router
{
    public function get($url, $action)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET" && $_SERVER['REQUEST_URI'] == $url) {
            $product = new Product();
            $product->$action();
        }
    }

    public function post($url, $action)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['REQUEST_URI'] == $url) {
            $product = new Product();
            $product->$action();
        }
    }
}