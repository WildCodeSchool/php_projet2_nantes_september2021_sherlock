<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\HomeModel;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new HomeModel();
    }

    public function index()
    {    
        return $this->twig->render('sherlock/home.html.twig');
    }

    public function scenario()
    {
        $scenarios = $this->model->selectAll();
        return $this->twig->render('sherlock/escenario.html.twig', ["enigmes"=>$scenarios]);
    }

    public function game(int $id/*, int $idReponseQuestion, string $intitule*/): string
    {
        $scenario = $this->model->selectOneById($id);
        $questions = $this->model->selectAllQuestions();
        $personnages = $this->model->selectAllPersonnage();
        //     session_start();
        //  if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $idQuestions = trim($_POST['id']);
        //      $idPersonne = trim($_POST['id']);
        //      $this->model->reponseQuestionById($idPersonne, $idQuestions);
        // }
        $reponsequestion = $this->model->reponseQuestionById($idReponseQuestion, $intitule);
      return $this->twig->render('sherlock/game.html.twig', ["scenario"=>$scenario, "personnages"=>$personnages, "questions"=>$questions, "reponsequestion"=>$reponsequestion]);
    }

    public function police(int $id): string
    {
        $scenario = $this->model->selectOneById($id);
        return $this->twig->render('sherlock/police.html.twig');
    }

    public function win()
    {
        return $this->twig->render('sherlock/win.html.twig');
    }
    
     public function aboutus()
    {
        return $this->twig->render('sherlock/aboutus.html.twig');
    }
    public function thanks()
    {
        return $this->twig->render('sherlock/thanks.html.twig');
    }
    public function lose()
    {
        return $this->twig->render('sherlock/lose.html.twig');
    }

       
}