<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Domain
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\DomainTrait;
}
