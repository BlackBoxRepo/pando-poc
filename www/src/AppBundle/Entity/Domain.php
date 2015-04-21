<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Domain implements \BlackBoxCode\Pando\Bundle\UserBundle\Model\DomainInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\DomainTrait;
}
