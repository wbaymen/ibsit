<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Questionnaire;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\QuestionnaireType;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $questionnaires = $em->getRepository('AppBundle:Questionnaire')->findAll();

        return $this->render('AppBundle:Home:index.html.twig', array(
            'questionnaires' => $questionnaires,
        ));
    }

    /**
     * @Route("/question", name="question_index")
     */
    public function indexQuestionAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $questions = $em->getRepository('AppBundle:Question')->findQuestions();

        return $this->render('AppBundle:Question:index.html.twig', array(
            'questions' => $questions,
        ));
    }

    /**
     * @Route("/response", name="response_index")
     */
    public function indexResponseAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $responses = $em->getRepository('AppBundle:Response')->findAll();

        return $this->render('AppBundle:Response:index.html.twig', array(
            'responses' => $responses,
        ));
    }

    /**
     * Create Action.
     *
     * @Route("/questionnaire/new", name="questionnaire_new")
     */
    public function newAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $request = $this->container->get('request');
        $questionnaire = new Questionnaire();

        $form = $this->get('form.factory')->create(new QuestionnaireType(), $questionnaire);

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em->persist($form->getData());
                $em->flush();

                return $this->redirect($this->generateUrl('homepage'));
            }
        }

        return $this->render('AppBundle:Home:new.html.twig', array(
            'questionnaire' => $form,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/questionnaire/edit/{id}", name="questionnaire_edit")
     */
    public function editAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $request = $this->container->get('request');

        $questionnaire = $em->find('AppBundle:Questionnaire', $id);

        $form = $this->createForm(new QuestionnaireType(), $questionnaire);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($form->getData());
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'success_message');

            return new RedirectResponse($this->container->get('router')->generate('homepage'));
        }

        return $this->render('AppBundle:Home:edit.html.twig', array(
            'questionnaire' => $questionnaire,
            'form' => $form->createView(),
        ));
    }
}
