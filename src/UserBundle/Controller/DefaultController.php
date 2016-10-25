<?php

namespace UserBundle\Controller;

use ApiErrorBundle\Entity\Error;
use Doctrine\DBAL\Schema\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\AccessToken;
use UserBundle\Entity\User;
use UserBundle\Entity\Client;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ApiErrorBundle\Controller\ErrorController;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use Doctrine\Common\Cache\PhpFileCache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\SecurityContext;
use JMS\Serializer\SerializerBuilder;

class DefaultController extends BaseController
{
    /**
     * @Route("/{_locale}/",
     *     requirements={
     *         "_locale": "en|ru|"
     *     }, name="main"
     * )
     */
    public function indexAction(Request $request)
    {
        $userdemo = $this->getDoctrine()->getRepository('UserBundle:User')->find(1);
        $errors = $this->get('validator')->validate($userdemo,null,array($request->getLocale())); // validation by language

        return $this->render('UserBundle:Default:index.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error
        ));
    }

    /**
     * @Route("/error/403", name="access_denied_url")
     */
    public function accessDenied(){
        echo 'ACCESS DENIED (text from UserBundle:DecfaultController.accessDenied)'; exit();
    }
}
