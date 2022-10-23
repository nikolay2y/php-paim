<?php

declare(strict_types=1);

namespace App;

require_once('./src/utils/View.php');
include_once('./src/utils/debug.php');
const DEFAULT_ACTION = 'list';

$action = $_GET['acion'] ?? DEFAULT_ACTION;

$viewParams = [];

switch($action){
case 'create':
$page = 'create';
    $created = false;
    if(!empty($_POST)) {
        $viewParams = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
        ];
        $created = true;
    }
    $viewParams['created'] = $created;
    break;
    default:
    $page = 'list';
    $viewParams['resultList'] = 'Wyswietlame listy notatek';
    break;

}

$view = new View();
$view->render($page, $viewParams);

?>