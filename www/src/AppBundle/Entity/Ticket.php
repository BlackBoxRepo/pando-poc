<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={
 *     @ORM\Index(columns={"createdOn"}),
 *     @ORM\Index(columns={"updatedOn"})
 * })
 */
class Ticket implements
    \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketInterface,
    \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\TicketInterface
{
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\TicketTrait;
    use \BlackBoxCode\Pando\Bundle\AccountTicketBundle\Model\TicketTrait;
}
