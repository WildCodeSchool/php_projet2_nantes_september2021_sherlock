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
<<<<<<< HEAD
   
=======
    
    public function adminListeQuestions()
    {
        $questions = $this->model->selectAll();
        return $this->twig->render('sherlock/adminQuestions.html.twig', ["questions"=>$questions]);
    }

>>>>>>> 6bde3204127f4033c345dc90d369f040045dbaab
    public function adminIndices()
    {
        return $this->twig->render('sherlock/adminIndices.html.twig');
    }

<<<<<<< HEAD
    public function adminEnigmes()
=======
    public function adminPreuves()
    {
        return $this->twig->render('sherlock/adminPreuves.html.twig');
    }

    public function adminTemoignages()
    {
        return $this->twig->render('sherlock/adminTemoignages.html.twig');
    }

    public function adminListeEnigmes()
>>>>>>> 6bde3204127f4033c345dc90d369f040045dbaab
    {
        $scenarios = $this->model->selectAll();
        return $this->twig->render('sherlock/adminEnigmes.html.twig', ["enigmes"=>$scenarios]);
    }

}

?>