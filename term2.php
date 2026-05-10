function loadTemplate($filename){
    ob_start();
    require $filename;
    $contents = ob_get_clean();
    return $contents;
}

