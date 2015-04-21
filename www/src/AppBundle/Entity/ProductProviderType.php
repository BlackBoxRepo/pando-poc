<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductProviderType implements \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderTypeInterface
{
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderTypeTrait;
}
