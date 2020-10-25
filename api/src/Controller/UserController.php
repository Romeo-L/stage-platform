<?php

// src/Controller/UserController.php

namespace App\Controller;

//use App\Service\RequestService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * The Procces test handles any calls that have not been picked up by another test, and wel try to handle the slug based against the wrc.
 *
 * Class UserController
 *
 * @Route("/users")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/")
     * @Template
     */
    public function indexAction()
    {
        $variables = [];

        return $variables;
    }
}
