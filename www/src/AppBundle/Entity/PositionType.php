<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PositionType implements \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PositionTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PositionTypeTrait;
}
