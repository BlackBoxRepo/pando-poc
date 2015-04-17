<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantImage
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantImageTrait;
}
