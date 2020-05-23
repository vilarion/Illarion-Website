<?php

namespace Illarion\DatabaseBundle\Entity\IllarionServer;

use Doctrine\ORM\Mapping as ORM;
use Illarion\DatabaseBundle\Entity\Server;

/**
 * RaceBeard
 *
 * @ORM\Table(
 *     schema="illarionserver",
 *     name="race_beard",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="race_beard_de", columns={"rb_race_id", "rb_type_id", "rb_name_de"}),
 *         @ORM\UniqueConstraint(name="race_beard_en", columns={"rb_race_id", "rb_type_id", "rb_name_en"})
 *     }
 * )
 * @ORM\Entity
 */
class RaceBeard extends Server\RaceBeard
{
    /**
     * @var \Illarion\DatabaseBundle\Entity\IllarionServer\RaceTypes
     *
     * @ORM\ManyToOne(targetEntity="Illarion\DatabaseBundle\Entity\IllarionServer\RaceTypes", inversedBy="beards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rb_race_id", referencedColumnName="rt_race_id"),
     *   @ORM\JoinColumn(name="rb_type_id", referencedColumnName="rt_type_id")
     * })
     */
    private $raceType;

    /**
     * Get raceType
     *
     * @return \Illarion\DatabaseBundle\Entity\IllarionServer\RaceTypes
     */
    public function getRaceType()
    {
        return $this->raceType;
    }

    /**
     * Set raceType
     *
     * @param \Illarion\DatabaseBundle\Entity\IllarionServer\RaceTypes $raceType
     *
     * @return RaceBeard
     */
    public function setRaceType(\Illarion\DatabaseBundle\Entity\IllarionServer\RaceTypes $raceType = null)
    {
        $this->raceType = $raceType;

        return $this;
    }
}
