<?php

namespace CodeEmailMKT\Infrastructure\Persistence\Doctrine\Repository;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use CodeEmailMKT\Domain\Entity\Tag;

class TagRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $container->get(EntityManager::class);
        return $entityManager->getRepository(Tag::class);
    }

}
