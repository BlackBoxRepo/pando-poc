<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductOptionType implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionTypeTrait;
}
