<?php
try
{
    $db = new PDO('mysql:host=;dbname=', '', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>