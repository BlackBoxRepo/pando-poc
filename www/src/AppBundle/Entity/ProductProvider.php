<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ProductProvider
{
    use \BlackBoxCode\Pando\Bundle\ProductProviderBundle\Model\ProductProviderTrait;
}
