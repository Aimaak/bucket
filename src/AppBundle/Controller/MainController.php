<?php
/**
 * Created by PhpStorm.
 * User: yboucher2018
 * Date: 05/03/2019
 * Time: 16:51
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function layoutAction()
    {
        return $this->render("layout/layout.html.twig");
    }

    /**
     * @Route("/page2", name="secondePage")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function otherAction()
    {
        return $this->render("layout/page2.html.twig");
    }

    /**
     * @Route("/aboutus", name="aboutUs")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutUsAction()
    {
        return $this->render("layout/about_us.html.twig");
    }

    /**
     * @Route("/success", name="success")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function successAction()
    {
        return $this->render("layout/success.html.twig");
    }
}