<?php

namespace Galaxy\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Qwer\UserBundle\Entity\User as QWERUser;
/**
 * User
 */
class User extends QWERUser
{
    private $lockedExpiresAt;
    
    public function getLockedExpiresAt()
    {
        return $this->lockedExpiresAt;
    }

    public function setLockedExpiresAt($lockedExpiresAt)
    {
        $this->lockedExpiresAt = $lockedExpiresAt;
    }



}
