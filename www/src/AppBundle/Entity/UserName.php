<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class UserName implements \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserNameInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserNameTrait;
}
