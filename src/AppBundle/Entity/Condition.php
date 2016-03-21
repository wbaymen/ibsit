<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condition
 *
 * @ORM\Table(name="condition")
 * @ORM\Entity
 */
class Condition
{
    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=255, nullable=true)
     */
    private $desc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConditionId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conditionid;



    /**
     * Set desc
     *
     * @param string $desc
     * @return Condition
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Get conditionid
     *
     * @return integer 
     */
    public function getConditionid()
    {
        return $this->conditionid;
    }
}
