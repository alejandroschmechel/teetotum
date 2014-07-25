<?php

namespace Teetotum\TeetotumBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RecordRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecordRepository extends EntityRepository
{
	public function findAll()
    {
        return $this->findBy(array(), array('time' => 'DESC'));
    }
}
