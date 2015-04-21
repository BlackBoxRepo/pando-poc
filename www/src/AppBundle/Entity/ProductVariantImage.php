<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductVariantImage implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantImageInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductVariantImageTrait;
}
