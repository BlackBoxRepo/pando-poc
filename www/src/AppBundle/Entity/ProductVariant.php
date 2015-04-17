<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariant
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductVariantTrait;
}
