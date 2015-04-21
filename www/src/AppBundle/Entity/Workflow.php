<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Workflow implements \BlackBoxCode\Pando\Bundle\TicketBundle\Model\WorkflowInterface
{
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\WorkflowTrait;
}
