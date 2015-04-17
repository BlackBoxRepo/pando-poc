<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Currency
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\CurrencyTrait;
}
