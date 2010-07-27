<?php

namespace Application\BlogBundle\Entities;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class PostRepository extends EntityRepository
{
    public function findOneByName($name)
    {
        try {
            return $this->createQueryBuilder('u')
                ->where('u.name = :name')
                ->setParameter('name', $name)
                ->getQuery()
                ->getSingleResult();
        }
        catch(NoResultException $e) {
            return null;
        }
    }
}