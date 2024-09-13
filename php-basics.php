<?php

echo "This is my first CLI script in PHP";

// 1.uzdevums
// a) Izveido ciklu, lai izvadītu skaitļu no 1 -10
// b) Izveido ciklu, lai izvadītu skaitļu no 10 - 1

// 2.uzdevums
// Izveido asociatīvu masīvu, kurā ir dati
// par 3 personām (vārds un vecums)
// Ar cikla palīdzību izvadīt katras personas datus
// sekojoša formātā: "Vārds: Jānis, Vecums: 19".
$people = [
    ['name' => 'janis', 'age' => 18],
    ['name' => 'antra', 'age' => 19],
];

$people = [
    'person1' => ['name' => 'janis', 'age' => 18],
    'person2' => ['name' => 'antra', 'age' => 19]
];