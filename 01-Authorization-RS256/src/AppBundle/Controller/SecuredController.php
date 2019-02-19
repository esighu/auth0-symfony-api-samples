<?php
/**
 * Created by PhpStorm.
 * User: german
 * Date: 1/20/15
 * Time: 11:12 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecuredController extends Controller
{
    /**
     * @Route("/api/public", name="public")
     */
    public function publicAction()
    {
        return new Response(
            '{"message": "Hello from a public endpoint! You don\'t need to be authenticated to see this."}',
            Response::HTTP_OK,
            array("Content-Type" => "application/json")
        );
    }
    /**
     * @Route("/api/private", name="private")
     */
    public function privateAction()
    {
        return new Response(
          '{"message": "Hello from a private endpoint! You need to be authenticated to see this."}',
          Response::HTTP_OK,
          array("Content-Type" => "application/json")
        );
    }
    /**
     * @Route("/api/private-scoped", name="privatescoped")
     */
    public function privateScopedAction()
    {
        return new Response(
          '{"message": "Hello from a private endpoint! You need to be authenticated and have a scope of read:messages to see this."}',
          Response::HTTP_OK,
          array("Content-Type" => "application/json")
        );
    }

}