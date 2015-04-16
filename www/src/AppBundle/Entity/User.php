<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\UserTrait;
}
