<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Person implements
    \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonInterface,
    \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PersonInterface,
    \BlackBoxCode\Pando\Bundle\AccountBundle\Model\PersonInterface
{
    use \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonTrait;
    use \BlackBoxCode\Pando\Bundle\EmployeeBundle\Model\PersonTrait;
    use \BlackBoxCode\Pando\Bundle\AccountBundle\Model\PersonTrait;
}
