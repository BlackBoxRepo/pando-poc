<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"product_id", "type_id"})})
 */
class ProductAttributeValue implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeValueInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeValueTrait;
}
