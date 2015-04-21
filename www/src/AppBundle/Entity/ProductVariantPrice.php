<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantPrice implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantPriceInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantPriceTrait;
}
