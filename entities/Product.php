<?php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Entity\Category;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $preco;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ManyToOne(targetEntity=Category::class, inversedBy="products")
     * @JoinColumn(name="category_id", referencedColumnName="id")
     * @var category[]
     */
    protected $category;


    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
}
