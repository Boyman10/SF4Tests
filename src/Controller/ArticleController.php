<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Created by Me - testing controller.
 * User: bob
 * Date: 10/04/18
 * Time: 10:57
 */
class ArticleController extends AbstractController
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
        $comments = [

            'I am a normale shit. It di not taster like bvaon',
            'Wouuu sendonc argument...',
            'third sentence to look for...',

        ];

        //dump($slug, $this);

        // After extending AbstractController, we use Twig
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-',' ', $slug)),
            'comments' => $comments,
        ]);
    }

}