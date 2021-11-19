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
        $personnages = $this->model->selectAllPersonnage();
     
        $moriartyReponses = $this->model->reponseQuestionById(1);
        $bakerReponses = $this->model->reponseQuestionById(2);
        $jamesReponses = $this->model->reponseQuestionById(3);
       
    return $this->twig->render('sherlock/game.html.twig', ["scenario"=>$scenario, "personnages"=>$personnages, "moriartyReponses"=>$moriartyReponses, "bakerReponses"=>$bakerReponses, "jamesReponses"=>$jamesReponses]);
    }

    public function police(int $id): string
    {
        $moriartyReponses = $this->model->reponseQuestionById(1);
        $bakerReponses = $this->model->reponseQuestionById(2);
        $jamesReponses = $this->model->reponseQuestionById(3);
        
        $scenario = $this->model->selectOneById($id);
        return $this->twig->render('sherlock/police.html.twig', ["moriartyReponses"=>$moriartyReponses, "bakerReponses"=>$bakerReponses, "jamesReponses"=>$jamesReponses]);
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

     public function contact()
    {
        $data = array_map('trim', $_POST);
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($data['firstname'] == ""){
                $errors['firstname'] = "Ce champ est obligatoire";
            }
        
            if($data['name'] == ""){
                $errors['name'] = "Ce champ est obligatoire";
            }
            
            if(!filter_var($data['courriel'], FILTER_VALIDATE_EMAIL)){
                $errors['courriel'] = "L'email n'est pas au bon format";
            }
        
            if($data['courriel'] == ""){
                $errors['courriel'] = "Ce champ est obligatoire";
            } 
            if($data['message'] == ""){
                $errors['message'] = "Ce champ est obligatoire";
            }     
        }
    return $this->twig->render('sherlock/contact.html.twig');
    }

       
}