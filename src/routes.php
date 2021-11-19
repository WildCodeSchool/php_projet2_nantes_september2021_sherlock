<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)

return [
    '' => ['HomeController', 'index',],
    'sherlock/escenario' => ['HomeController', 'scenario'],
    'sherlock/game' => ['HomeController', 'game', ['id']],
    'sherlock/police' => ['HomeController', 'police', ['id']],
    'sherlock/win' => ['HomeController', 'win'],
    'sherlock/home' => ['HomeController', 'index'],
    'sherlock/aboutus' => ['HomeController', 'aboutus',],
    'sherlock/thanks' => ['HomeController', 'thanks',],
    'sherlock/adminLogin' => ['AdminController', 'adminLogin'],
    'sherlock/adminIndices' => ['AdminController', 'adminIndices'],
    'sherlock/lose' => ['HomeController', 'lose'], 
    'sherlock/adminEnigmes' => ['AdminController', 'adminEnigmes'],
    'sherlock/adminQuestions' => ['AdminController', 'adminQuestions'],
];

