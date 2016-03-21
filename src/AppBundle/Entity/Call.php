<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Call
 *
 * @ORM\Table(name="`call`", indexes={@ORM\Index(name="IDX_9439497EA5626C52", columns={"caller_id"})})
 * @ORM\Entity
 */
class Call
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="callDate", type="datetime", nullable=true)
     */
    private $calldate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="assignementDate", type="datetime", nullable=true)
     */
    private $assignementdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="callNumber", type="string", length=255, nullable=true)
     */
    private $callnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Caller
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Caller")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caller_id", referencedColumnName="id")
     * })
     */
    private $caller;



    /**
     * Set calldate
     *
     * @param \DateTime $calldate
     * @return Call
     */
    public function setCalldate($calldate)
    {
        $this->calldate = $calldate;

        return $this;
    }

    /**
     * Get calldate
     *
     * @return \DateTime 
     */
    public function getCalldate()
    {
        return $this->calldate;
    }

    /**
     * Set assignementdate
     *
     * @param \DateTime $assignementdate
     * @return Call
     */
    public function setAssignementdate($assignementdate)
    {
        $this->assignementdate = $assignementdate;

        return $this;
    }

    /**
     * Get assignementdate
     *
     * @return \DateTime 
     */
    public function getAssignementdate()
    {
        return $this->assignementdate;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Call
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Call
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
     * Set callnumber
     *
     * @param string $callnumber
     * @return Call
     */
    public function setCallnumber($callnumber)
    {
        $this->callnumber = $callnumber;

        return $this;
    }

    /**
     * Get callnumber
     *
     * @return string 
     */
    public function getCallnumber()
    {
        return $this->callnumber;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Call
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Call
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

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
     * Set caller
     *
     * @param \AppBundle\Entity\Caller $caller
     * @return Call
     */
    public function setCaller(\AppBundle\Entity\Caller $caller = null)
    {
        $this->caller = $caller;

        return $this;
    }

    /**
     * Get caller
     *
     * @return \AppBundle\Entity\Caller 
     */
    public function getCaller()
    {
        return $this->caller;
    }
}
