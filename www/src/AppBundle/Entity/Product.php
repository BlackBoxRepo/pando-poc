<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product implements
    \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductInterface,
    \BlackBoxCode\Pando\Bundle\TaxBundle\Model\ProductInterface,
    \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductInterface,
    \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductTrait;
    use \BlackBoxCode\Pando\Bundle\TaxBundle\Model\ProductTrait;
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductTrait;
    use \BlackBoxCode\Pando\Bundle\ECommBundle\Model\ProductTrait;
}
