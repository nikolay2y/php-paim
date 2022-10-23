<?php

declare(strict_types=1);

namespace App;

require_once('./src/utils/View.php');
include_once('./src/utils/debug.php');
const DEFAULT_ACTION = 'list';

$action = $_GET['acion'] ?? DEFAULT_ACTION;

$viewParams = [];

if($action === 'create') {
    $viewParams['resultCreate'] = 'Udalo sie dodac notatke!';
    $viewParams['resultList'] = 'Wyswietlamy liste nottek';
}



$view = new View();
$view->render($action, $viewParams);

?>