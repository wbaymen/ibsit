<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="questionnaire", indexes={@ORM\Index(name="IDX_B4D8065A82F1BAF4", columns={"language_id"})})
 * @ORM\Entity
 */
class Questionnaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="welcomeMessage", type="text", nullable=true)
     */
    private $welcomemessage;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isGenerated", type="boolean", nullable=false)
     */
    private $isgenerated;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationSms", type="text", nullable=true)
     */
    private $confirmationsms;

    /**
     * @var string
     *
     * @ORM\Column(name="finalMessage", type="text", nullable=true)
     */
    private $finalmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Language
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;



    /**
     * Set description
     *
     * @param string $description
     * @return Questionnaire
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
     * Set welcomemessage
     *
     * @param string $welcomemessage
     * @return Questionnaire
     */
    public function setWelcomemessage($welcomemessage)
    {
        $this->welcomemessage = $welcomemessage;

        return $this;
    }

    /**
     * Get welcomemessage
     *
     * @return string 
     */
    public function getWelcomemessage()
    {
        return $this->welcomemessage;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Questionnaire
     */
    public function setAttachement($attachement)
    {
        $this->attachement = $attachement;

        return $this;
    }

    /**
     * Get attachement
     *
     * @return string 
     */
    public function getAttachement()
    {
        return $this->attachement;
    }

    /**
     * Set isgenerated
     *
     * @param boolean $isgenerated
     * @return Questionnaire
     */
    public function setIsgenerated($isgenerated)
    {
        $this->isgenerated = $isgenerated;

        return $this;
    }

    /**
     * Get isgenerated
     *
     * @return boolean 
     */
    public function getIsgenerated()
    {
        return $this->isgenerated;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Questionnaire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set confirmationsms
     *
     * @param string $confirmationsms
     * @return Questionnaire
     */
    public function setConfirmationsms($confirmationsms)
    {
        $this->confirmationsms = $confirmationsms;

        return $this;
    }

    /**
     * Get confirmationsms
     *
     * @return string 
     */
    public function getConfirmationsms()
    {
        return $this->confirmationsms;
    }

    /**
     * Set finalmessage
     *
     * @param string $finalmessage
     * @return Questionnaire
     */
    public function setFinalmessage($finalmessage)
    {
        $this->finalmessage = $finalmessage;

        return $this;
    }

    /**
     * Get finalmessage
     *
     * @return string 
     */
    public function getFinalmessage()
    {
        return $this->finalmessage;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Questionnaire
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set language
     *
     * @param \AppBundle\Entity\Language $language
     * @return Questionnaire
     */
    public function setLanguage(\AppBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \AppBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
