<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductProvider implements \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderTrait;
}
