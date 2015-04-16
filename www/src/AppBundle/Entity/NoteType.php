<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class NoteType implements
    \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTypeInterface,
    \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\NoteTypeInterface,
    \BlackBoxCode\Pando\Bundle\TicketBundle\Model\NoteTypeInterface,
    \BlackBoxCode\Pando\Bundle\AccountBundle\Model\NoteTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTypeTrait;
}
