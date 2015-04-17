<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantOptionValue
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantOptionValueTrait;
}
