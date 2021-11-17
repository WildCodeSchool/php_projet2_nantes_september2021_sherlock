<?php

namespace App\Controller;

 /**
     * Display login page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

use App\Model\HomeModel;

class AdminController extends AbstractController
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new HomeModel();
    }

    public function adminLogin()
    {
        return $this->twig->render('sherlock/adminLogin.html.twig');
    }
    
    public function adminQuestions()
    {
        $questions = $this->model->selectAllQuestions();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $intitule = trim($_POST['intitule']);
            $this->model->insertQuestion($intitule);
        }
        return $this->twig->render('sherlock/adminQuestions.html.twig', ["questions"=>$questions]);

        
    }

    /*public function addQuestions()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $intitule = trim($_POST['intitule']);
            $this->insertQuestion($intitule);
            header('Location:/sherlock/adminQuestions');
        }
    }

    public function deleteQuestion()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $this->deleteQuestionById((int)$id);
            header('Location:/sherlock/adminQuestions');
        }
    }

    public function updateQuestion(int $id)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $this->updateQuestionById((int)$id);
            header('Location: /sherlock/adminQuestions');
        }
    } */

    public function adminIndices()
    {
        return $this->twig->render('sherlock/adminIndices.html.twig');
    }


    public function adminListeEnigmes()
    {
        $scenarios = $this->model->selectAll();
        return $this->twig->render('sherlock/adminEnigmes.html.twig', ["enigmes"=>$scenarios]);
    }

}

?>