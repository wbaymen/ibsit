<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="IDX_4F812B18CE07E8FF", columns={"questionnaire_id"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="questionText", type="string", length=100, nullable=true)
     */
    private $questiontext;

    /**
     * @var string
     *
     * @ORM\Column(name="questionTextEn", type="string", length=100, nullable=true)
     */
    private $questiontexten;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="responseType", type="boolean", nullable=true)
     */
    private $responsetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mode", type="boolean", nullable=true)
     */
    private $mode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Questionnaire
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Questionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id")
     * })
     */
    private $questionnaire;



    /**
     * Set questiontext
     *
     * @param string $questiontext
     * @return Question
     */
    public function setQuestiontext($questiontext)
    {
        $this->questiontext = $questiontext;

        return $this;
    }

    /**
     * Get questiontext
     *
     * @return string 
     */
    public function getQuestiontext()
    {
        return $this->questiontext;
    }

    /**
     * Set questiontexten
     *
     * @param string $questiontexten
     * @return Question
     */
    public function setQuestiontexten($questiontexten)
    {
        $this->questiontexten = $questiontexten;

        return $this;
    }

    /**
     * Get questiontexten
     *
     * @return string 
     */
    public function getQuestiontexten()
    {
        return $this->questiontexten;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Question
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
     * Set responsetype
     *
     * @param boolean $responsetype
     * @return Question
     */
    public function setResponsetype($responsetype)
    {
        $this->responsetype = $responsetype;

        return $this;
    }

    /**
     * Get responsetype
     *
     * @return boolean 
     */
    public function getResponsetype()
    {
        return $this->responsetype;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Question
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set mode
     *
     * @param boolean $mode
     * @return Question
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return boolean 
     */
    public function getMode()
    {
        return $this->mode;
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
     * Set questionnaire
     *
     * @param \AppBundle\Entity\Questionnaire $questionnaire
     * @return Question
     */
    public function setQuestionnaire(\AppBundle\Entity\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \AppBundle\Entity\Questionnaire 
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }
}
