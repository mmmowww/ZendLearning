<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto")
 * @ORM\Entity
 */
class Foto {
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
	 * @ORM\Column(name="src", type="text", length=65535, nullable=true)
	 */
	private $src;
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	/**
	 * Get id
	 *
	 * @return string
	 */
	public function getSrc() {
		return $this->src;
	}

}
