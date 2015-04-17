<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class MimeType
{
    use \BlackBoxCode\Pando\Bundle\FileBundle\Model\MimeTypeTrait;
}
