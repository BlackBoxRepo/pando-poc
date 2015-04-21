<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Account implements
    \BlackBoxCode\Pando\Bundle\AccountBundle\Model\AccountInterface,
    \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\AccountInterface,
    \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\AccountInterface
{
    use \BlackBoxCode\Pando\Bundle\AccountBundle\Model\AccountTrait;
    use \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\AccountTrait;
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\AccountTrait;
}
