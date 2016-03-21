<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditiondetails
 *
 * @ORM\Table(name="conditiondetails", indexes={@ORM\Index(name="FK_01", columns={"cid"}), @ORM\Index(name="FK_03", columns={"toQuest"}), @ORM\Index(name="IDX_1C8BEE655492AEDA", columns={"qid"})})
 * @ORM\Entity
 */
class Conditiondetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="valMin", type="string", length=255, nullable=false)
     */
    private $valmin;

    /**
     * @var string
     *
     * @ORM\Column(name="valMax", type="string", length=255, nullable=false)
     */
    private $valmax;

    /**
     * @var \AppBundle\Entity\Question
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="qid", referencedColumnName="id")
     * })
     */
    private $qid;

    /**
     * @var \AppBundle\Entity\Condition
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Condition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cid", referencedColumnName="ConditionId")
     * })
     */
    private $cid;

    /**
     * @var \AppBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toQuest", referencedColumnName="id")
     * })
     */
    private $toquest;



    /**
     * Set valmin
     *
     * @param string $valmin
     * @return Conditiondetails
     */
    public function setValmin($valmin)
    {
        $this->valmin = $valmin;

        return $this;
    }

    /**
     * Get valmin
     *
     * @return string 
     */
    public function getValmin()
    {
        return $this->valmin;
    }

    /**
     * Set valmax
     *
     * @param string $valmax
     * @return Conditiondetails
     */
    public function setValmax($valmax)
    {
        $this->valmax = $valmax;

        return $this;
    }

    /**
     * Get valmax
     *
     * @return string 
     */
    public function getValmax()
    {
        return $this->valmax;
    }

    /**
     * Set qid
     *
     * @param \AppBundle\Entity\Question $qid
     * @return Conditiondetails
     */
    public function setQid(\AppBundle\Entity\Question $qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return \AppBundle\Entity\Question 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set cid
     *
     * @param \AppBundle\Entity\Condition $cid
     * @return Conditiondetails
     */
    public function setCid(\AppBundle\Entity\Condition $cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return \AppBundle\Entity\Condition 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set toquest
     *
     * @param \AppBundle\Entity\Question $toquest
     * @return Conditiondetails
     */
    public function setToquest(\AppBundle\Entity\Question $toquest = null)
    {
        $this->toquest = $toquest;

        return $this;
    }

    /**
     * Get toquest
     *
     * @return \AppBundle\Entity\Question 
     */
    public function getToquest()
    {
        return $this->toquest;
    }
}
