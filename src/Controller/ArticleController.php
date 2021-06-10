<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
     
    
    public function homepage()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
    /*
     * @Route("\/news\/{slug}")
    */
    public function show   ($slug)
    {
        $comments = ['i\'m goind a test with twist and symfony',
                       'woooow that\'s was greats!!!',
                       'xxxcvxcvlnsldjlwdsf',
        ];
        return $this->render('article/show.html.twig',['title'=>ucwords(str_replace('-',' ',$slug)),
                                                       comments=>$comments,
            
          ] );
         
    }
    
}
