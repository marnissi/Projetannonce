<?php

namespace Annonce\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payement
 *
 * @ORM\Table(name="payement")
 * @ORM\Entity(repositoryClass="Annonce\AnnonceBundle\Repository\PayementRepository")
 */
class Payement
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
     * @var float
     *
     * @ORM\Column(name="totalHt", type="float", nullable=true)
     */
    private $totalHt;

    /**
     * @var float
     *
     * @ORM\Column(name="tax", type="float")
     */
    private $tax;

    /**
     * @var float
     *
     * @ORM\Column(name="totalTtc", type="float")
     */
    private $totalTtc;


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
     * Set totalHt
     *
     * @param float $totalHt
     *
     * @return Payement
     */
    public function setTotalHt($totalHt)
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * Get totalHt
     *
     * @return float
     */
    public function getTotalHt()
    {
        return $this->totalHt;
    }

    /**
     * Set tax
     *
     * @param float $tax
     *
     * @return Payement
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set totalTtc
     *
     * @param float $totalTtc
     *
     * @return Payement
     */
    public function setTotalTtc($totalTtc)
    {
        $this->totalTtc = $totalTtc;

        return $this;
    }

    /**
     * Get totalTtc
     *
     * @return float
     */
    public function getTotalTtc()
    {
        return $this->totalTtc;
    }
}

