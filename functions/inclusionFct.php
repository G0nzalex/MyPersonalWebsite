<?php
function inclusionFct(){
    $functionFiles = glob('./functions/*.php');

    for ($i = 0 ; $i < count($functionFiles) ; $i++) {
        if ($functionFiles[$i] !== './functions/inclusionFunctions.php')
            require_once $functionFiles[$i];
}
}