<?php

namespace Annonce\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailAnnonce
 *
 * @ORM\Table(name="detail_annonce")
 * @ORM\Entity(repositoryClass="Annonce\AnnonceBundle\Repository\DetailAnnonceRepository")
 */
class DetailAnnonce
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
     * @ORM\Column(name="titre", type="string", length=30, unique=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=20, nullable=true)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseEntrprise", type="string", length=40, nullable=true)
     */
    private $adresseEntrprise;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="Annonce\AnnonceBundle\Entity\Categorie")
     *
     */
    private $categorie;
    /**
     * @ORM\ManyToOne(targetEntity="Annonce\AnnonceBundle\Entity\SousCategorie")
     *
     */
    private $souscategorie;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return DetailAnnonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return DetailAnnonce
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set adresseEntrprise
     *
     * @param string $adresseEntrprise
     *
     * @return DetailAnnonce
     */
    public function setAdresseEntrprise($adresseEntrprise)
    {
        $this->adresseEntrprise = $adresseEntrprise;

        return $this;
    }

    /**
     * Get adresseEntrprise
     *
     * @return string
     */
    public function getAdresseEntrprise()
    {
        return $this->adresseEntrprise;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return DetailAnnonce
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return DetailAnnonce
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return DetailAnnonce
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DetailAnnonce
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
     * Set categorie
     *
     * @param \Annonce\AnnonceBundle\Entity\Categorie $categorie
     *
     * @return DetailAnnonce
     */
    public function setCategorie(\Annonce\AnnonceBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Annonce\AnnonceBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set souscategorie
     *
     * @param \Annonce\AnnonceBundle\Entity\SousCategorie $souscategorie
     *
     * @return DetailAnnonce
     */
    public function setSouscategorie(\Annonce\AnnonceBundle\Entity\SousCategorie $souscategorie = null)
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return \Annonce\AnnonceBundle\Entity\SousCategorie
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }
}
