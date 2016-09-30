<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ParamType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="ParamName", mappedBy="paramType",cascade={"persist"})
     */
     private $paramNames;

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
     * @return ParamType
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
     * Constructor
     */
    public function __construct()
    {
        $this->paramNames = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add paramNames
     *
     * @param \Application\AppBundle\Entity\ParamName $paramNames
     * @return ParamType
     */
    public function addParamName(\Application\AppBundle\Entity\ParamName $paramNames)
    {
        $paramNames->setParamType($this);
        $this->paramNames[] = $paramNames;

        return $this;
    }

    /**
     * Remove paramNames
     *
     * @param \Application\AppBundle\Entity\ParamName $paramNames
     */
    public function removeParamName(\Application\AppBundle\Entity\ParamName $paramNames)
    {
        $this->paramNames->removeElement($paramNames);
    }

    /**
     * Get paramNames
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParamNames()
    {
        return $this->paramNames;
    }
}
