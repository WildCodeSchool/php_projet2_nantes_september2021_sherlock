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


class AdminController extends AbstractController
{
    public function adminLogin()
    {
        return $this->twig->render('sherlock/adminLogin.html.twig');
    }
   
    public function adminIndices()
    {
        return $this->twig->render('sherlock/adminIndices.html.twig');
    }

    public function adminEnigmes()
    {
        return $this->twig->render('sherlock/adminEnigmes.html.twig');
    }

}

?>