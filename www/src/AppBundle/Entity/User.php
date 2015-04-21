<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User implements
    \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserInterface,
    \BlackBoxCode\Pando\Bundle\PersonBundle\Model\UserInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\UserTrait;
}
