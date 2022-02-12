<?php

function render($titlePage, $actionFile, $viewFile, $templateFile = 'template.html.php')
{
    $title = $titlePage;
    ob_start();
    require  $actionFile;
    require $viewFile;
    $content = ob_get_clean();
    require LAYOUT_PATH . $templateFile;
}
