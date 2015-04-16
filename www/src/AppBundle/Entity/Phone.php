<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Phone
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\PhoneTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PhoneTrait;
}
