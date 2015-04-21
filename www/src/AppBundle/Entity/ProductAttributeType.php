<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductAttributeType implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeTypeTrait;
}
