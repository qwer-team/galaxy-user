<?php

namespace Galaxy\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FOSRestController
{

    public function postLockUserAction(Request $request, $userId)
    {
        $user = $this->getUserById($userId);
        $date = $request->request->get("lockedExpiresAt");
        $dateTime = new \DateTime($date);
        $user->setLockedExpiresAt($dateTime);
        $this->getDoctrine()->getEntityManager()->flush();
        $result = array("result" => "success");
        $view = $this->view($result);
        return $this->handleView($view);
    }

    /**
     * 
     * @return \Galaxy\UserBundle\Entity\User
     */
    private function getUserById($userId)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository("GalaxyUserBundle:User")->find($userId);
        return $user;
    }

    public function getUserIdAction($userId)
    {
        $user = $this->getUserById($userId);
        $view = $this->view($user);
        return $this->handleView($view);
    }

}
