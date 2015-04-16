<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Note
{
    use \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTrait;
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\NoteTrait;
}
