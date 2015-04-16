<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionIsoCode
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionIsoCodeTrait;
}
