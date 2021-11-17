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
        parent::__construct(;
        $this->model = new HomeModel();
    }

    public function adminLogin()
    {
        return $this->twig->render('sherlock/adminLogin.html.twig');
    }

    public function adminQuestions()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $intitule = trim($_POST['intitule']);
            $this->model->insertQuestion($intitule);
        }
        $questions = $this->model->selectAllQuestions();
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['id'])) {
                $delete = trim($_POST['id']);
                $this->model->deleteIndiceById($delete);
            }
            elseif(isset($_POST['indice'])) {
                $intitule = trim($_POST['indice']);
                $this->model->insertIndice($indice);
            } 
        }
        $indices = $this->model->selectAllIndices();
        return $this->twig->render('sherlock/adminQuestions.html.twig', ["indices"=>$indices]);
    }

    public function adminListeEnigmes()
    {
        $scenarios = $this->model->selectAll();
        return $this->twig->render('sherlock/adminEnigmes.html.twig', ["enigmes"=>$scenarios]);
    }

}

?>