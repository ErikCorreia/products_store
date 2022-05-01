<?php

    namespace App\modules\home\controller;

    use Entity\Product;
    use Entity\Category;

    class HomeController
    {

        public function getProduct()
        {
            require_once "bootstrap.php";
            $product = new Product();

            $products = $entityManager->getRepository(Product::class)->findAll();
            $categories = $entityManager->getRepository(Category::class)->findAll();

            include __DIR__.'/../templates/home.php';

        }

        public function postProduct()
        {

            require_once "bootstrap.php";

            $product = new Product();
            $product->setNome($_POST['name']);
            $product->setPreco($_POST['price']);
            $product->setCategory($entityManager->find(Category::class, $_POST['category']));
            $product->setDescricao($_POST['description']);

            $entityManager->persist($product);
            $entityManager->flush();
        
            header("location: /");
            exit();

        }
        public function categoryInsert()
        {
            require_once "bootstrap.php";

            $category = new Category();
            $category->setName($_POST['newCategory']);

            $entityManager->persist($category);
            $entityManager->flush();

            header("location: /");
            exit();
        }
    }

    