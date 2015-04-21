<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductImage implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductImageInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductImageTrait;
}
