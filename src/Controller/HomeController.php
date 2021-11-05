<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

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


    public function index()
    {
        return $this->twig->render('sherlock/home.html.twig');
    }


    public function scenario()
    {
        return $this->twig->render('sherlock/escenario.html.twig');
    }

    public function game()
    {
        return $this->twig->render('sherlock/game.html.twig');
    }

    public function police()
    {
        return $this->twig->render('sherlock/police.html.twig');
    }

    public function win()
    {
        return $this->twig->render('sherlock/win.html.twig');
    }
}
