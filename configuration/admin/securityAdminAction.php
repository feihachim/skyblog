<?php

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false)
{
    header('Location: index.php?action=connexion');
}
