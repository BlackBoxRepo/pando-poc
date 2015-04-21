<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(columns={"number"})})
 */
class Phone implements
    \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneInterface,
    \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PhoneInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PhoneTrait;
}
