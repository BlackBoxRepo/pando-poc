<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductImage
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductImageTrait;
}
