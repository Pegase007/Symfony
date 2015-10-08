<?php

namespace Troiswa\BugBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
//
        $articles =
        [
          [
            "id" => 0,
            "title" => "Awesome Image Post.",
            "description" => "Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, augue ac pulvinar accumsan, risus arcu malesuada est, a imperdiet lacus libero ac tellus. Nunc fringilla ullamcorper quam at lacinia. Nullam suscipit mauris quis nibh accumsan, a scelerisque risus imperdiet. Maecenas eget ullamcorper sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet.",
            "views" => 14,
            "author" => "2code",
            "date_created" => new \Datetime('now'),
            "comments" => 22,
            "categories" => ['wordpress', 'php', 'css', 'js'],
            "picture" => "images/post-1.png"
          ],
          [
            "id" => 1,
            "title" => "Awesome Vimeo Post.",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure corrupti suscipit, facere soluta obcaecati aperiam ducimus eveniet ratione! Hic labore, sequi magni odit? Molestiae non vel repudiandae, aliquid dignissimos obcaecati!",
            "views" => 22,
            "author" => "2code",
            "date_created" => new \Datetime('2015-10-07'),
            "comments" => 2,
            "categories" => ['php'],
            "picture" => "images/post-1.png"
          ],
          [
            "id" => 2,
            "title" => "Awesome Quote Post.",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel aperiam, dolor numquam similique libero doloribus. Quaerat, iste modi ea harum recusandae itaque, vel ducimus tempora, similique optio quasi pariatur iusto?",
            "views" => 4,
            "author" => "2code",
            "date_created" => new \Datetime('2015-10-06'),
            "comments" => 100,
            "categories" => ['html', 'css'],
            "picture" => "images/post-1.png"
          ],
        ];


      $nbpages= ceil(count($articles)/2) ;

        $page =$request->query->get('page');
        $start=$page*2-2;

        $articlespages = array_slice($articles,$start,2);



        return $this->render('TroiswaBugBundle:Default:index.html.twig',["articles"=>$articlespages,"nbpages"=>$nbpages]);
    }

    public function customAction()
    {
      // NE PAS CHANGER LA VALEUR DE LA VARIABLE $connected
      $connected = false;
      return $this->render('TroiswaBugBundle:Default:custom.html.twig', ['connected' => $connected, 'contenu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aut iste dolores id ad suscipit sapiente eveniet saepe at excepturi reiciendis, incidunt vel. Tempora fugiat autem quae, minima vel suscipit?']);
    }
}
