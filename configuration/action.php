<?php

function render($titlePage, $actionFile, $viewFile, $templateFile = 'template.html.php')
{
    $title = $titlePage;
    ob_start();
    require  $actionFile;
    require $viewFile;
    $content = ob_get_clean();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == false)
    {
        require LAYOUT_PATH . 'user-template.html.php';
    }
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true)
    {
        require LAYOUT_PATH . 'admin-template.html.php';
    }
    if (!isset($_SESSION['admin']))
    {
        require LAYOUT_PATH . 'template.html.php';
    }
}
