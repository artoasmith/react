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
     *     }
     * )
     */
    public function indexAction(Request $request)
    {
        $userdemo = $this->getDoctrine()->getRepository('UserBundle:User')->find(1);
        $errors = $this->get('validator')->validate($userdemo,null,array($request->getLocale())); // validation by language
        //var_dump($this->serialize(['user'=>$userdemo,'test'=>43],$request->getLocale(),'array')); // serialize by language
        //exit();

        return $this->render('UserBundle:Default:index.html.twig');
    }

    /**
     * @Route("/t3/")
     * @Route("/{_locale}/t3/",
     *     requirements={
     *         "_locale": "en|ru|"
     *     })
     */
    public function indexwAction(Request $request)
    {
        $userdemo = $this->getDoctrine()->getRepository('UserBundle:User')->findAll();
        echo $request->getLocale();
        var_dump($this->getParameter('locale.available'));
        //var_dump($this->serialize($userdemo,$request->getLocale()));

        return $this->render('UserBundle:Default:index.html.twig');
    }
}
