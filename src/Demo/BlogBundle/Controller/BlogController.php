<?php

namespace Demo\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Demo\BlogBundle\Entity\BlogPost;

class BlogController extends Controller
{

    public function newAction(Request $request)
    {
        // prepare form builder
        $form = $this->createFormBuilder(new BlogPost())
            ->add('title', 'text', array('label' => 'Blog Post Title'))
            ->add('date', 'date', array(
                'widget' => 'single_text',
                'label'  => 'Publication Date',
            ))
            ->getForm();

        // if it's a submission, bind it to the formBuilder object
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                // here we would save the post to the DB
                return $this->redirect($this->generateUrl('home'));
            }
        }

        // render a new form
        return $this->render('DemoBlogBundle:Blog:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
