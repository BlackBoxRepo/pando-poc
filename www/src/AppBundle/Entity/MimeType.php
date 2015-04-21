<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class MimeType implements \BlackBoxCode\Pando\Bundle\FileBundle\Model\MimeTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\FileBundle\Model\MimeTypeTrait;
}
