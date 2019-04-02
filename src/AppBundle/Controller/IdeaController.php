<?php
/**
 * Created by PhpStorm.
 * User: yboucher2018
 * Date: 07/03/2019
 * Time: 09:58
 */

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Idea;
use AppBundle\Form\IdeaType;

/**
 * @Route("/idea", name="idea_")
 * Class IdeaController
 * @package AppBundle\Controller
 */
class IdeaController extends Controller
{
    /**
     * @Route("/", name="list")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ideas = $em->getRepository("AppBundle:Idea")->getRecentIdeas();

        return $this->render("layout/list.html.twig", [
            "ideas" => $ideas,
        ]);
    }

    /**
     * @Route("/detail-{id}.html", name="detail")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ideaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $idea = $em->getRepository("AppBundle:Idea")->getIdeaById($id);

        if (empty($idea)) {
            throw $this->createNotFoundException("Idée introuvable !");
        }

        return $this->render("layout/detail.html.twig", [
            "idea" => $idea
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $em
     * @Route("/add", name="add")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request, EntityManagerInterface $em)
    {
        $idea = new Idea();
        $idea->setIsPublished(true);
        $ideaForm = $this->createForm(IdeaType::class, $idea,["user"=>$this->getUser()]);

        $ideaForm->handleRequest($request);

        if ($ideaForm->isSubmitted()) {
            $em->persist($idea);
            $em->flush();

            $this->addFlash("success", "Idée enregistrée avec succès");
            return $this->redirectToRoute("idea_list");
        }

        return $this->render("layout/add.html.twig", [
            "ideaForm" => $ideaForm->createView(),
        ]);
    }


    /**
     * @param Request $request
     * @param EntityManagerInterface $em
     * @Route("/edit-{id}.html", name="edit")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, EntityManagerInterface $em, Idea $idea)
    {

        $idea->setIsPublished(true);
        $ideaForm = $this->createForm(IdeaType::class, $idea,["user"=>$this->getUser()]);

        $ideaForm->handleRequest($request);

        if ($ideaForm->isSubmitted()) {
            $em->persist($idea);
            $em->flush();

            $this->addFlash("success", "Idée modifiée avec succès");
            return $this->redirectToRoute("idea_list");
        }

        return $this->render("layout/edit.html.twig", [
            "ideaForm" => $ideaForm->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Idea $idea
     * @Route("/delete-{id}.html", name="delete")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction(Request $request, EntityManagerInterface $em, Idea $idea)
    {
        $formBuilder = $this->createFormBuilder();
        $formBuilder->add("enregistrer", SubmitType::class)
        ->add("annuler", SubmitType::class);

        $form = $formBuilder->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->remove($idea);
            $em->flush();

            $this->addFlash("success", "L'idée a bien été supprimée");
            return $this->redirectToRoute("idea_list");
        }

        return $this->render("layout/delete.html.twig", [
            "form" => $form->createView()
        ]);
    }
}