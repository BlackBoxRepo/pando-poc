<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductOptionValue
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductOptionValueTrait;
}
