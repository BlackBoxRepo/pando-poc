<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RegionIsoCode implements \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionIsoCodeInterface
{
    use \BlackBoxCode\Pando\Bundle\ContactInfoBundle\Model\RegionIsoCodeTrait;
}
