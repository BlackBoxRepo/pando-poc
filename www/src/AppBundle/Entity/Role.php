<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Role implements \BlackBoxCode\Pando\Bundle\UserBundle\Model\RoleInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\RoleTrait;
}
