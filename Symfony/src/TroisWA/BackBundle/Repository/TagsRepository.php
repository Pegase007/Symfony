<?php

namespace TroisWA\BackBundle\Repository;

/**
 * TagsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagsRepository extends \Doctrine\ORM\EntityRepository
{




    public function tagsProd()
    {

        $query = $this->createQueryBuilder("tags")
            ->select('tags')
//            ->join('tags.product','prod')
//            ->groupBy('tags')
            ->getQuery();
 //
        return $query->getResult();


    }
}
