<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class File implements \BlackBoxCode\Pando\Bundle\FileBundle\Model\FileInterface
{
    use \BlackBoxCode\Pando\Bundle\FileBundle\Model\FileTrait;
}
