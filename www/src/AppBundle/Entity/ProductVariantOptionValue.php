<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantOptionValue implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantOptionValueInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantOptionValueTrait;
}
