<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ParamName
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ParamName
{
  use \A2lix\I18nDoctrineBundle\Doctrine\ORM\Util\Translatable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="ParamType", inversedBy="paramNames")
     */
    private $paramType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    protected $translations;


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
     * @return ParamName
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
     * Set paramType
     *
     * @param \Application\AppBundle\Entity\ParamType $paramType
     * @return ParamName
     */
    public function setParamType(\Application\AppBundle\Entity\ParamType $paramType = null)
    {
        $this->paramType = $paramType;

        return $this;
    }

    /**
     * Get paramType
     *
     * @return \Application\AppBundle\Entity\ParamType
     */
    public function getParamType()
    {
        return $this->paramType;
    }

    public function __toString(){
      return $this->name;
    }
}
