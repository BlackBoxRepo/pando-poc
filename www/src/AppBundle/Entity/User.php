<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserTrait;
}
