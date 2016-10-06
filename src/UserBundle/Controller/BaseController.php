<?php
/**
 * Created by PhpStorm.
 * User: N1
 * Date: 12.09.16
 * Time: 11:22
 */

namespace UserBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use ApiErrorBundle\Entity\Error;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\AccessToken;
use UserBundle\Entity\User;
use UserBundle\Entity\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;

class BaseController extends FOSRestController
{
    public function serialize($obj,$groups=[],$type="json"){
        $serializer = SerializerBuilder::create()->build();
        if(is_string($groups))
            $groups = [$groups];
        $groups[] = 'Default';
        if($type=='array'){
            return json_decode($serializer->serialize($obj, 'json', SerializationContext::create()->setGroups($groups)),true);
        } else
            return $serializer->serialize($obj, $type, SerializationContext::create()->setGroups($groups));
    }
}