<?php

declare(strict_types=1);

namespace App;

require_once('./src/utils/View.php');
include_once('./src/utils/debug.php');
const DEFAULT_ACTION = 'list';

$action = $_GET['acion'] ?? DEFAULT_ACTION;

$viewParams = [];

if($action === 'create') {
    $page = 'create';
    $viewParams['resultCreate'] = 'Udalo sie dodac notatke!';
} else {
    $viewParams['resultList'] = 'Wyswietlamy liste nottek';
$page='list';
}



$view = new View();
$view->render($page, $viewParams);

?>