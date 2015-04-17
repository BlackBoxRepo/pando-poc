<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class File
{
    use \BlackBoxCode\Pando\Bundle\FileBundle\Model\FileTrait;
}
