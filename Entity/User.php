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
    private $birthday;

    public function getLockedExpiresAt()
    {
        return $this->lockedExpiresAt;
    }

    public function setLockedExpiresAt($lockedExpiresAt)
    {
        $this->lockedExpiresAt = $lockedExpiresAt;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

}
