<?php
/**
 * Created by PhpStorm.
 * User: ZachPrinz
 * Date: 3/19/2016
 * Time: 6:33 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{

    /**
     * @Route("/{subjectName}/{topicName}")
     */

    public function showAction($subjectName, $topicName)
    {
        $templating = $this->container->get('templating');
        return $this->render('topic/show.html.twig', [
            'topicName' => $topicName,
            'subjectName' => $subjectName,
            'materials' => ['Cool video', 'Rad Powerpoint', 'Awesome Gif'],
            'content_types' => ['Videos','Lessons','Gifs','Infographics','Blogs'],
            'videos' => ['https://www.youtube.com/watch?v=p_o4aY7xkXg',
                        'https://www.youtube.com/watch?v=4GbWfNHtHRg',
                        'https://www.youtube.com/watch?v=mezkHBPLZ4A',
                        'https://www.youtube.com/watch?v=7CuYx9mZCQA',
                        'https://www.youtube.com/watch?v=rKbJjzmFCco',
                        'https://www.youtube.com/watch?v=KPfURpxf_vM']
        ]);
    }
}