<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class UserName
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\UserNameTrait;
}
