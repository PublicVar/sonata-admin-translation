<?php
/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\PageBundle\Entity;

use Sonata\PageBundle\Entity\BaseBlock as BaseBlock;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class Block extends BaseBlock
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add children
     *
     * @param \Application\Sonata\PageBundle\Entity\Block $children
     * @return Block
     */
    public function addChild(\Application\Sonata\PageBundle\Entity\Block $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Application\Sonata\PageBundle\Entity\Block $children
     */
    public function removeChild(\Application\Sonata\PageBundle\Entity\Block $children)
    {
        $this->children->removeElement($children);
    }
}
