<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductOptionValue implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionValueInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionValueTrait;
}
