<?php

require_once __DIR__ . '/Models/Movie.php';


$matrix = new Movie('The Matrix', 120, 'https://media.gqitalia.it/photos/5c9bbe26309bf64e125d4a09/16:9/w_2560%2Cc_limit/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg');

$starWars = new Movie('Star Wars', 90, 'https://multiplayer.net-cdn.it/thumbs/images/2023/04/07/star_wars_jpg_1600x900_crop_q85.jpg');

var_dump($matrix->getInfo());
var_dump($starWars->getInfo());
