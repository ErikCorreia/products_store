<?php

// use Doctrine\ORM\Mapping as ORM;

// /**
//  * @ORM\Entity
//  * @ORM\Table(name="subcategory")
//  */
// class Subcategory
// {
//     /**
//      * @ORM\id
//      * @ORM\Column(type="integer")
//      * @ORM\GeneratedValue
//      */
//     private $id;

//     /**
//      * @ORM\Column(type="string")
//      */
//     private $subcategory_name;

//     /**
//      * @ORM\ManyToOne(targetEntity="subcategory", mapedBy="name")
//      * @ORM\JoinColumn(nullable=false)
//      */
//     private $category;

//     public function getName()
//     {
//         return $this->subcategory_name;
//     }
//     public function setName($subcategory_name)
//     {
//         $this->subcategory_name = $subcategory_name;
//     }
//     public function getSubcategory()
//     {
//         return $this->category;
//     }
//     public function setSubcategory($category)
//     {
//         $this->category = $category;
//     }

// }