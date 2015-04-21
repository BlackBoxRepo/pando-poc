<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={
 *     @ORM\Index(columns={"city"}),
 *     @ORM\Index(columns={"postcode"})
 * })
 */
class Address implements
    \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressInterface,
    \BlackBoxCode\Pando\Bundle\PersonBundle\Model\AddressInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\AddressTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\AddressTrait;
}
