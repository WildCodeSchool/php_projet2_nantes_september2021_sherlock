<?php
require_once "../View/sherlock/game.html.twig";

session_start();

//  Cookies pour limiter le nombre de questions à 3 
    if(!isset($_SESSION['questions']) && array_count_values($_SESSION['question']) > 3) : ?>
        <div> Vous ne pouvez sélectionner que trois questions. </div>
    <?php else : ?>

<!-- // Cookies pour stocker les réponses/questions choisis dans le container indices -->
        <?php foreach(array_unique($_SESSION['question']) as $question_id): ?>
            <div class="texteindice">
                <ul> 
                    <li> <?= array_unique($_SESSION['reponses'] [$reponse_id]) ?> </li>
                </ul>
        <?php endforeach ?>
    <?php endif ?>   
            </div>


