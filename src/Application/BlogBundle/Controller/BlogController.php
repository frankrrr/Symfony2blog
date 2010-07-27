<?php

namespace Application\BlogBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
		$posts = $this->getRepository('Post')->findAll();
		
        return $this->render('BlogBundle:Blog:index', array('posts' => $posts));
    }

	public function viewAction($blog_id)
	{
		$post = $this->getRepository('Post')->findOneById($blog_id);

		return $this->render('BlogBundle:Blog:view', array('post' => $post));
	}
	
	protected function getRepository($class)
    {
        return $this->container->getDoctrine_Orm_DefaultEntityManagerService()->getRepository('Application\BlogBundle\Entities\\'.$class);
    }
}