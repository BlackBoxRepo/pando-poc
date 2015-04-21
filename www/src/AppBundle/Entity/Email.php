<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(columns={"emailUser"})})
 */
class Email implements \BlackBoxCode\Pando\Bundle\UserBundle\Model\EmailInterface
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\EmailTrait;
}
