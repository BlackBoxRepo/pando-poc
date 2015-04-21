<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariant implements
    \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductVariantInterface,
    \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductVariantTrait;
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantTrait;
}
