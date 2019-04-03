<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => '../src/templates/compilation_cache',
    'debug' => true,
    'strict_variables' => true,
]);

require_once __DIR__ . '/StudentsTable.php';

$db = new StudentsTable(new PDO('sqlite:../db/students.db'));

//require_once __DIR__ . '/PostService.php';

//$postService = new PostService;