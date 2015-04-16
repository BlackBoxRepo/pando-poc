<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Workflow
{
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\WorkflowTrait;
}
