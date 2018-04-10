<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Created by Me - testing controller.
 * User: bob
 * Date: 10/04/18
 * Time: 10:57
 */
class ArticleController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response("Gotcha my page is jright here !!");

    }

    /**
     * @Route("/news/wh-ateroids-bacoin")
     */
    public function show()
    {

        return new Response("Wouuuh future page s good !!");
    }

}