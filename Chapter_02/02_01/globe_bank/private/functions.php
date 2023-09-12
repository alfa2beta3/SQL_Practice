<?php

function url_for($script_path){
    if ($script_path[0] != '/'){
        $script_path = '/' . $script_path;
    }
    $script_path = WWW_ROOT . $script_path;

    return $script_path;
}
?>
