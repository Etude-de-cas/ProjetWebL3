<?php

namespace wp\AssociationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      $news = $this->getDoctrine()
      ->getRepository('wpAssociationBundle:Articles')
      ->findAll();

      if (!$news)
      {
        throw $this->createNotFoundException(
        'Aucune news'
      );
      }
        return $this->render('wpAssociationBundle:Home:index.html.twig', array('news'=>$news));
    }
    public function archivesAction($annee)
    {
        return $this->render('wpAssociationBundle:Archives:archives.html.twig', array('annee' => $annee));
    }
    public function contactAction()
    {
        return $this->render('wpAssociationBundle:Contact:contact.html.twig');
    }
    public function nosactionsAction()
    {
        return $this->render('wpAssociationBundle:Organisation:action.html.twig');
    }
    public function butAction()
    {
        return $this->render('wpAssociationBundle:Organisation:but.html.twig');
    }
    public function equipeAction()
    {
        return $this->render('wpAssociationBundle:Organisation:equipe.html.twig');
    }
    public function galerieAction()
    {
        return $this->render('wpAssociationBundle:Ressources:galerie.html.twig');
    }
    public function aideAction()
    {
        return $this->render('wpAssociationBundle:Soutien:aide.html.twig');
    }
    public function soutienAction()
    {
        return $this->render('wpAssociationBundle:Soutien:soutien.html.twig');
    }
}
