<?php

namespace TroisWA\BackBundle\Repository;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentsRepository extends \Doctrine\ORM\EntityRepository
{


    public function lastComments($id)
    {
        $query = $this->createQueryBuilder("com")
            ->where ('com.product = :idProd')
            ->setParameters(["idProd"=>$id])
            ->orderBy('com.dateCreated','desc')
            ->setMaxResults(5)
            ->getQuery();

        return $query->getResult();
    }

    public function lastComs()
    {
        $query = $this->createQueryBuilder("com")
            ->orderBy('com.dateCreated','desc')
            ->setMaxResults(10)
            ->getQuery();

        return $query->getResult();
    }


}
