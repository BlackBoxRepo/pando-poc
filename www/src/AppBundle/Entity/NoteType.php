<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class NoteType
{
    use \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTypeTrait;
}
