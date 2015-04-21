<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TaxCategoryType implements \BlackBoxCode\Pando\Bundle\TaxBundle\Model\TaxCategoryTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\TaxCategoryTypeTrait;
}
