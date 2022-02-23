<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentfoto
 *
 * @ORM\Table(name="comentfoto", indexes={@ORM\Index(name="CustomerId", columns={"CustomerId"})})
 * @ORM\Entity
 */
class Comentfoto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user", type="string", length=100, nullable=true)
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=100, nullable=true)
     */
    private $comment;

    /**
     * @var \Album\Entity\Foto
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\Foto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerId", referencedColumnName="Id")
     * })
     */
    private $customerid;


}
