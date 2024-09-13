<?php

$taskList = ["first task", "second task"];

function showAllTasks($inputTasks) {
    foreach($inputTasks as $task) {
        echo $task . "\n";
    }
}

function addTask($inputTasks) {
    echo "to be implemented";
}

// $name = readline("Ievadi savu vārdu:\n");
// echo "Your name is $name";

// 1.uzdevums
// Uztaisīt do-while ciklu, ko lietotājs
// var apstādināt ievadot 'N'

// 2.uzdevums
// Izveidot switch-case konstrukciju,
// lai apstrādātu dažādas lietotāja ievades

do {
    echo "Uzdevumu pārvaldieks\n";
    echo "Apskatīt visus uzdevumus => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumu => 3\n";

    $choice = readline("Izvēlies darbību: ");

    switch ($choice) {
    case '1':
        showAllTasks($taskList);
        break;
    case '2':
        addTask($taskList);
        break;
    case '3':
        echo "To be implemented!\n";
        break;
    default:
        echo "Invalid option!\n";
    }

    $continue = readline("Vai vēlies turpināt\n");
} while ($continue != "N");