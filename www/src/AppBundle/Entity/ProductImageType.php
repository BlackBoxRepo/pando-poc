<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductImageType implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductImageTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductImageTypeTrait;
}
