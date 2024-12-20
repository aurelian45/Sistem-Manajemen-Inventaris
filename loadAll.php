<?php

// panggil db connection
require_once __DIR__ . "/db.php";

// panggil semua function yang ada di directory function
$dirFunction = __DIR__ . '/function';
$listFuncion = array_diff(scandir($dirFunction), array('..', '.'));

foreach ($listFuncion as $key => $functionFile) {
    require_once "{$dirFunction}/{$functionFile}";
}

// panggil semua model yang ada di directory model
$dirModel = __DIR__ . '/model';
$listModel = array_diff(scandir($dirModel), array('..', '.'));

foreach ($listModel as $key => $model) {
    require_once  "{$dirModel}/{$model}";
}
