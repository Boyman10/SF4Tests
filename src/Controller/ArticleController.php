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
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        return new Response(sprintf("Wouuuh future page s good - %s",$slug));
    }

}