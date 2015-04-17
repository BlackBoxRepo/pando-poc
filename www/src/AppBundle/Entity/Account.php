<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Account
{
    use \BlackBoxCode\Pando\Bundle\AccountBundle\Model\AccountTrait;
    use \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\AccountTrait;
    use \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\AccountTrait;
}
