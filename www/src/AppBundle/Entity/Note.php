<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Note implements
    \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteInterface,
    \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\NoteInterface,
    \BlackBoxCode\Pando\Bundle\TicketBundle\Model\NoteInterface,
    \BlackBoxCode\Pando\Bundle\AccountBundle\Model\NoteInterface
{
    use \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTrait;
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\NoteTrait;
    use \BlackBoxCode\Pando\Bundle\TicketBundle\Model\NoteTrait;
    use \BlackBoxCode\Pando\Bundle\AccountBundle\Model\NoteTrait;
}
