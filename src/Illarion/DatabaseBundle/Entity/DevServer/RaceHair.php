<?php

namespace Illarion\DatabaseBundle\Entity\DevServer;

use Doctrine\ORM\Mapping as ORM;
use Illarion\DatabaseBundle\Entity\Server;

/**
 * RaceHair
 *
 * @ORM\Table(
 *     schema="devserver",
 *     name="race_hair",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="race_hair_de", columns={"rh_race_id", "rh_type_id", "rh_name_de"}),
 *         @ORM\UniqueConstraint(name="race_hair_en", columns={"rh_race_id", "rh_type_id", "rh_name_en"})
 *     }
 * )
 * @ORM\Entity
 */
class RaceHair extends Server\RaceHair
{
    /**
     * @var \Illarion\DatabaseBundle\Entity\DevServer\RaceTypes
     *
     * @ORM\ManyToOne(targetEntity="Illarion\DatabaseBundle\Entity\DevServer\RaceTypes", inversedBy="hairs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rh_race_id", referencedColumnName="rt_race_id"),
     *   @ORM\JoinColumn(name="rh_type_id", referencedColumnName="rt_type_id")
     * })
     */
    private $raceType;

    /**
     * Get raceType
     *
     * @return \Illarion\DatabaseBundle\Entity\DevServer\RaceTypes
     */
    public function getRaceType()
    {
        return $this->raceType;
    }

    /**
     * Set raceType
     *
     * @param \Illarion\DatabaseBundle\Entity\DevServer\RaceTypes $raceType
     *
     * @return RaceHair
     */
    public function setRaceType(\Illarion\DatabaseBundle\Entity\DevServer\RaceTypes $raceType = null)
    {
        $this->raceType = $raceType;

        return $this;
    }
}
