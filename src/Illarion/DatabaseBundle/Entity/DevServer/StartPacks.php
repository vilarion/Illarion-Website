<?php

namespace Illarion\DatabaseBundle\Entity\DevServer;

use Doctrine\ORM\Mapping as ORM;
use Illarion\DatabaseBundle\Entity\Server;

/**
 * StartPacks
 *
 * @ORM\Table(schema="devserver", name="startpacks")
 * @ORM\Entity
 */
class StartPacks extends Server\StartPacks
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Illarion\DatabaseBundle\Entity\DevServer\StartPackItems", mappedBy="startPack")
     */
    private $items;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Illarion\DatabaseBundle\Entity\DevServer\StartPackSkills", mappedBy="startPack")
     */
    private $skills;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add item
     *
     * @param \Illarion\DatabaseBundle\Entity\DevServer\StartPackItems $item
     *
     * @return StartPacks
     */
    public function addItem(\Illarion\DatabaseBundle\Entity\DevServer\StartPackItems $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \Illarion\DatabaseBundle\Entity\DevServer\StartPackItems $item
     */
    public function removeItem(\Illarion\DatabaseBundle\Entity\DevServer\StartPackItems $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add skill
     *
     * @param \Illarion\DatabaseBundle\Entity\DevServer\StartPackSkills $skill
     *
     * @return StartPacks
     */
    public function addSkill(\Illarion\DatabaseBundle\Entity\DevServer\StartPackSkills $skill)
    {
        $this->skills[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \Illarion\DatabaseBundle\Entity\DevServer\StartPackSkills $skill
     */
    public function removeSkill(\Illarion\DatabaseBundle\Entity\DevServer\StartPackSkills $skill)
    {
        $this->skills->removeElement($skill);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkills()
    {
        return $this->skills;
    }
}
