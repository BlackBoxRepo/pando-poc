<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(columns={"emailUser"})})
 */
class Email
{
    use \BlackBoxCode\Pando\Bundle\UserBundle\Model\EmailTrait;
}
