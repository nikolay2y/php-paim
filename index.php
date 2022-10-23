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
    $created = false;
    if(!emply($_POST)) {
        $viewParams = [
            'title' => $_POST['title'],
            'description' => $_POST['description']
        ];
        $created = true;
    }
    $viewParams['created'] = $created;
}else {
        $page = 'list';
    }




$view = new View();
$view->render($page, $viewParams);

?>