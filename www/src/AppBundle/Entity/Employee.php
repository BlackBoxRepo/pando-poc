<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Employee implements \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\EmployeeInterface
{
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\EmployeeTrait;
}
