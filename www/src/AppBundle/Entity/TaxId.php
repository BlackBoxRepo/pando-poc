<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TaxId
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\TaxIdTrait;
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\TaxIdTrait;
}
