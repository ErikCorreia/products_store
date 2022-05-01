<?php

namespace App\modules\edit\controller;

use Entity\Product;

class EditController 
{
    public function getProduct($req, $res, $args)
    {
        require_once "bootstrap.php";
        $product = new Product();
        $product = $entityManager->getRepository(Product::class)->find($args['id']);
        include __DIR__.'/../templates/edit.php';
    }
}