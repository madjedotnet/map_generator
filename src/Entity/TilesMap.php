<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TilesMapRepository")
 */
class TilesMap
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Map", inversedBy="tiles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Map;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMap(): ?Map
    {
        return $this->Map;
    }

    public function setMap(?Map $Map): self
    {
        $this->Map = $Map;

        return $this;
    }
}
