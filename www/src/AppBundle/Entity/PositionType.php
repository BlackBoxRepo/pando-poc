<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PositionType
{
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PositionTypeTrait;
}
