<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ticket
{
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketTrait;
    use \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\TicketTrait;
}
