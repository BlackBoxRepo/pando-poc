<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class TicketStatusType implements \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketStatusTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketStatusTypeTrait;
}
