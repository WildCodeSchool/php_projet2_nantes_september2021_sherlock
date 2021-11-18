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
        session_start();
        var_dump($_SESSION);
        $errors = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['user_name'] = $_POST['user_name'];
            $_SESSION['password'] = $_POST['password'];
            if($this->model->exist($_POST['user_name'], $_POST['password'])) {
                header('Location: adminEnigmes');
            }
            else {
                $errors = "Cet utilisateur n'existe pas";
            }
        }
        
        return $this->twig->render('sherlock/adminLogin.html.twig', ["errors"=>$errors]);
    }
    
    public function adminEnigmes()
    {
        session_start();
        $errors = "";
        if($_SESSION == NULL) {
            $errors = "Il faut être connecté pour accéder à cette page";
            return $this->twig->render('sherlock/adminLogin.html.twig', ["errors"=>$errors]);
            header('Location: adminLogin');
        }
        var_dump($_SESSION);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if(isset($_POST['idModif'])) {
                $enigme = array_map('trim', $_POST);  
                $enigme = $this->model->updateEnigmeById($enigme);
            }
            elseif(isset($_POST['idSupp'])) {
                $delete = trim($_POST['idSupp']);
                $this->model->delete($delete);
            }       
            elseif(isset($_POST['titre'])) {
                if(!($_POST['titre'] == "")) {               
                    $titre = trim($_POST['titre']);
                    $this->model->insertEnigme($titre);
                }
            }
            elseif(isset($_POST['deconnexion'])) {
                session_destroy();
                header('Location: adminLogin');
            }        
        }
        $enigmes = $this->model->selectAll();
        return $this->twig->render('sherlock/adminEnigmes.html.twig', ["enigmes"=>$enigmes]);
    }

    public function adminQuestions()
    {  
        session_start();
        if($_SESSION == NULL) {
            $errors = "Il faut être connecté pour accéder à cette page";
            return $this->twig->render('sherlock/adminLogin.html.twig', ["errors"=>$errors]);
            header('Location: adminLogin');
        }
        var_dump($_SESSION);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['idModif'])) {
                $question = array_map('trim', $_POST);  
                $question = $this->model->updateQuestionById($question);
            }
            elseif(isset($_POST['idSupp'])) {
                $delete = trim($_POST['idSupp']);
                $this->model->deleteQuestionById($delete);
            }       
            elseif(isset($_POST['intitule'])) {
                if(!($_POST['intitule'] == "")) {               
                    $titre = trim($_POST['intitule']);
                    $this->model->insertQuestion($titre);
                }
            }
            elseif(isset($_POST['deconnexion'])) {
                session_destroy();
                header('Location: adminLogin');
            }
        }
        $questions = $this->model->selectAllQuestions();
        return $this->twig->render('sherlock/adminQuestions.html.twig', ["questions"=>$questions]);      
    }


    public function adminIndices()
    {
        session_start();
        if($_SESSION == NULL) {
            $errors = "Il faut être connecté pour accéder à cette page";
            return $this->twig->render('sherlock/adminLogin.html.twig', ["errors"=>$errors]);
            header('Location: adminLogin');
        }
        var_dump($_SESSION);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['idModif'])) {
                $indice = array_map('trim', $_POST);  
                $indice = $this->model->updateIndiceById($indice);
            }
            elseif(isset($_POST['idSupp'])) {
                $delete = trim($_POST['idSupp']);
                $this->model->deleteIndiceById($delete);
            }       
            elseif(isset($_POST['indice'])) {
                if(!($_POST['indice'] == "")) {               
                    $titre = trim($_POST['indice']);
                    $this->model->insertIndice($titre);
                }
            }
            elseif(isset($_POST['deconnexion'])) {
                session_destroy();
                header('Location: adminLogin');
            }
        }
        $indices = $this->model->selectAllIndices();
        return $this->twig->render('sherlock/adminIndices.html.twig', ["indices"=>$indices]);
    }


    

}

?>