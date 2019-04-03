<?php

require_once '../src/bootstrap.php';

$limit = 10;

if (! array_key_exists('currentpage', $_GET)) {
    $currentPage = 1;
    $offset = 0;
}
else {
    $currentPage = $_GET['currentpage'];
}

if (! array_key_exists('order', $_GET)) {$order = 'rating';}
else {$order = $_GET['order'];};

if (array_key_exists('nextpage', $_GET)) {
    switch ($_GET['nextpage']) {
        case 'next':
            $offset = $_GET['currentpage'] * $limit;
            $currentPage++;
            break;
        case 'prev':
            $offset = ($_GET['currentpage'] -1) * $limit;
            if ($currentPage > 1) $currentPage--;
            break;
    }
}


$rows = $db->fetch($limit, $order, $offset);

$template = $twig->load('index.twig');
$template->display(['users' => $rows, 'order'=>$order, 'currentpage'=>$currentPage]);