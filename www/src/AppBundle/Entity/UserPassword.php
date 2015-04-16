<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class UserPassword
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserPasswordTrait;
}
