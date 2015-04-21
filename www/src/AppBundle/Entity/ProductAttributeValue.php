<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductAttributeValue implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeValueInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeValueTrait;
}
