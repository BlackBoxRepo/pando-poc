<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class UserPassword implements \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserPasswordInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserPasswordTrait;
}
