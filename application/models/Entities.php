<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{

    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
    /**
     * @Column(type="string", length=255, unique=true, nullable=false)
     */
    protected $email;

    /**
     * @Column(type="string", length=64, nullable=false)
     */
    protected $password;

    /**
     * @Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $firstname;

    /**
     * @Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $lastname;

}
