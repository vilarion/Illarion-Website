<?php

namespace Illarion\DatabaseBundle\Entity\IllarionServer;

use Doctrine\ORM\Mapping as ORM;
use Illarion\DatabaseBundle\Entity\Server;

/**
 * SkillGroups
 *
 * @ORM\Table(schema="illarionserver", name="skillgroups")
 * @ORM\Entity
 */
class SkillGroups extends Server\SkillGroups
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Illarion\DatabaseBundle\Entity\IllarionServer\Skills", mappedBy="group")
     */
    private $skills;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skill
     *
     * @param \Illarion\DatabaseBundle\Entity\IllarionServer\Skills $skill
     *
     * @return SkillGroups
     */
    public function addSkill(\Illarion\DatabaseBundle\Entity\IllarionServer\Skills $skill)
    {
        $this->skills[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \Illarion\DatabaseBundle\Entity\IllarionServer\Skills $skill
     */
    public function removeSkill(\Illarion\DatabaseBundle\Entity\IllarionServer\Skills $skill)
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
