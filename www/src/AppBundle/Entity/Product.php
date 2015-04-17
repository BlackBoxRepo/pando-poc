<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductTrait;
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\ProductTrait;
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductTrait;
}
