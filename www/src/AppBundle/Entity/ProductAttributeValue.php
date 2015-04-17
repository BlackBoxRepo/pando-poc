<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductAttributeValue
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductAttributeValueTrait;
}
