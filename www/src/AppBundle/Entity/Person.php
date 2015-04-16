<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Person
{
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonTrait;
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PersonTrait;
    use \BlackBoxCode\Pando\Bundle\AccountBundle\Model\PersonTrait;
}
