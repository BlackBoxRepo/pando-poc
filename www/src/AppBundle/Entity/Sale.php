<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Sale
{
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\SaleTrait;
}
