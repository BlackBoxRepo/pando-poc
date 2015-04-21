<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductCategory implements \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductCategoryInterface
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductCategoryTrait;
}
