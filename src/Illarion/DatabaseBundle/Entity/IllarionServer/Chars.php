<?php

namespace Illarion\DatabaseBundle\Entity\IllarionServer;

use Doctrine\ORM\Mapping as ORM;
use Illarion\DatabaseBundle\Entity\Server;

/**
 * Chars
 *
 * @ORM\Table(schema="illarionserver", name="chars")
 * @ORM\Entity()
 */
class Chars extends Server\Chars
{
    /**
     * @var \Illarion\DatabaseBundle\Entity\IllarionServer\Race
     *
     * @ORM\ManyToOne(targetEntity="Illarion\DatabaseBundle\Entity\IllarionServer\Race", inversedBy="chars")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chr_race", referencedColumnName="race_id")
     * })
     */
    private $race;

    /**
     * @var \Illarion\DatabaseBundle\Entity\Accounts\Account
     *
     * @ORM\ManyToOne(targetEntity="Illarion\DatabaseBundle\Entity\Accounts\Account", inversedBy="illarionServerChars")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chr_accid", referencedColumnName="acc_id")
     * })
     */
    private $account;

    /**
     * @var Player
     *
     * @ORM\OneToOne(targetEntity="Illarion\DatabaseBundle\Entity\IllarionServer\Player", mappedBy="character")
     */
    private $player;

    /**
     * Get race
     *
     * @return \Illarion\DatabaseBundle\Entity\IllarionServer\Race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set race
     *
     * @param \Illarion\DatabaseBundle\Entity\IllarionServer\Race $race
     *
     * @return Chars
     */
    public function setRace(\Illarion\DatabaseBundle\Entity\IllarionServer\Race $race = null)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Illarion\DatabaseBundle\Entity\Accounts\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set account
     *
     * @param \Illarion\DatabaseBundle\Entity\Accounts\Account $account
     *
     * @return Chars
     */
    public function setAccount(\Illarion\DatabaseBundle\Entity\Accounts\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get player
     *
     * @return \Illarion\DatabaseBundle\Entity\IllarionServer\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set player
     *
     * @param \Illarion\DatabaseBundle\Entity\IllarionServer\Player $player
     *
     * @return Chars
     */
    public function setPlayer(\Illarion\DatabaseBundle\Entity\IllarionServer\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }
}
