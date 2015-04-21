<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductOptionValueType implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionValueTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionValueTypeTrait;
}
