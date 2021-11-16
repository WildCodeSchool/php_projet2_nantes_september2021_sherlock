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
    
    public function adminListeQuestions()
    {
        $questions = $this->model->selectAll();
        return $this->twig->render('sherlock/adminQuestions.html.twig', ["questions"=>$questions]);
    }

    public function adminIndices()
    {
        return $this->twig->render('sherlock/adminIndices.html.twig');
    }

    public function adminPreuves()
    {
        return $this->twig->render('sherlock/adminPreuves.html.twig');
    }

    public function adminTemoignages()
    {
        return $this->twig->render('sherlock/adminTemoignages.html.twig');
    }

    public function adminListeEnigmes()
    {
        $scenarios = $this->model->selectAll();
        return $this->twig->render('sherlock/adminEnigmes.html.twig', ["enigmes"=>$scenarios]);
    }

}
    
//     /** Vérifie la méthode d'accès de la page */
//     if($_SERVER['REQUEST_METHOD'] === "POST"){
    
//     /** Nettoyage des données */
//     $name = trim($_POST['Name']);
//     $password = trim($_POST['Password']);
//     }

//     /** Validation des données */
//     if($name == ""){
//         $errors['Name'] = "Ce champ est obligatoire.";
//     }

//     if($password == ""){
//         $errors['Password'] = "Ce champ est obligatoire.";
//     }

// /** S'il n'y a pas d'erreurs, redirection vers la page adminQuestions.html.twig */
//     if(empty($errors)){
//         $statement->bindValue(':Name', $name, \PDO::PARAM_STR);
//         $statement->bindValue(':Password', $password, \PDO::PARAM_STR);

//         $statement->execute();

//         header("Location: /adminQuestions.html.twig");
//     }


?>