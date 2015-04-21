<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Currency implements \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\CurrencyInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\CurrencyTrait;
}
