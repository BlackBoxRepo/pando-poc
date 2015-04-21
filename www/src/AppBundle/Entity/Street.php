<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"type_id", "address_id"})})
 */
class Street implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\StreetInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\StreetTrait;
}
