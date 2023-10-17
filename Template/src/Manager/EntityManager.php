<?php

namespace App\Manager;

use App\Entity\Example;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Ici remplacer tout les entity par l'objet concerné
 */
class EntityManager
{
    private EntityManagerInterface $manager;
    private ExampleRepository $exampleRepository;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->manager = $entityManager;
        $this->exampleRepository = $this->manager->getRepository(Example::class);
    }

    /**
     * @param Example $entity
     * @return void
     */
    public function persist(Example $entity): void {
        $this->manager->persist($entity);
        $this->manager->flush();
    }

    /**
     * @param Example $entity
     * @return void
     */
    public function remove(Example $entity): void {
        $this->manager->remove($entity);
        $this->manager->flush();
    }

    public function setData(Example $entity): void {}
}