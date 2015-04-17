<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantPrice
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantPriceTrait;
}
