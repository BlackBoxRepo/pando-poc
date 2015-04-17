<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductCategory
{
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductCategoryTrait;
}
