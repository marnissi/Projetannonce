<?php

namespace Annonce\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Annonce\AnnonceBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\OneToMany(targetEntity="Annonce\AnnonceBundle\Entity\SousCategorie" ,mappedBy="categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $souscategories;
    /**
     * Categorie constructor.
     */
    public function __construct()
    {
        $this->souscategories = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Categorie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add souscategory
     *
     * @param \Annonce\AnnonceBundle\Entity\SousCategorie $souscategory
     *
     * @return Categorie
     */
    public function addSouscategory(\Annonce\AnnonceBundle\Entity\SousCategorie $souscategory)
    {
        $souscategory->setCategorie($this);
        $this->souscategories[] = $souscategory;

        return $this;
    }

    /**
     * Remove souscategory
     *
     * @param \Annonce\AnnonceBundle\Entity\SousCategorie $souscategory
     */
    public function removeSouscategory(\Annonce\AnnonceBundle\Entity\SousCategorie $souscategory)
    {
        $this->souscategories->removeElement($souscategory);
    }

    /**
     * Get souscategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSouscategories()
    {
        return $this->souscategories;
    }
    public function __toString(){

        return $this->getNom();

    }
}
