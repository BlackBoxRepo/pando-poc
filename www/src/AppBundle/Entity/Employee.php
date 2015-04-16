<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Employee
{
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\EmployeeTrait;
}
