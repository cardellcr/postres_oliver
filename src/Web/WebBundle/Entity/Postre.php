<?php

namespace Web\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Web\WebBundle\Entity\Postre
 */
class Postre
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var float $price
     */
    private $price;

    /**
     * @var string $foto
     */
    private $foto;

    /**
     * @var string $foto_thumb
     */
    private $foto_thumb;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Postre
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Postre
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Postre
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set foto_thumb
     *
     * @param string $fotoThumb
     * @return Postre
     */
    public function setFotoThumb($fotoThumb)
    {
        $this->foto_thumb = $fotoThumb;
    
        return $this;
    }

    /**
     * Get foto_thumb
     *
     * @return string 
     */
    public function getFotoThumb()
    {
        return $this->foto_thumb;
    }
}
