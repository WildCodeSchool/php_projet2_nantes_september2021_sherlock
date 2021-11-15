<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'sherlock/escenario' => ['Homecontroller', 'scenario'],
    'sherlock/game' => ['Homecontroller', 'game'],
    'sherlock/police' => ['Homecontroller', 'police'],
    'sherlock/win' => ['Homecontroller', 'win'],
    'sherlock/home' => ['Homecontroller', 'index'],
    'sherlock/aboutus' => ['Homecontroller', 'aboutus',],
    'sherlock/thanks' => ['Homecontroller', 'thanks',],
    'sherlock/adminLogin' => ['Admincontroller', 'adminLogin'],
    'sherlock/adminQuestions' => ['Admincontroller', 'adminQuestions'],
    'sherlock/adminIndices' => ['Admincontroller', 'adminIndices'],
    'sherlock/adminPreuves' => ['Admincontroller', 'adminPreuves'],
    'sherlock/adminTemoignages' => ['Admincontroller', 'adminTemoignages'],
<<<<<<< HEAD
    'sherlock/lose' => ['Homecontroller', 'lose'], 
=======
    'sherlock/adminEnigmes' => ['Admincontroller', 'adminEnigmes'],
>>>>>>> d4e4f27a865aa47b50054bee68e1ff0b3fbec886
];
