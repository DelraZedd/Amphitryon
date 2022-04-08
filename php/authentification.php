<?php
require_once 'param.php';
require_once 'utilisateurDAO.php';
require_once 'DBConnex.php';

print(json_encode(utilisateurDAO::authentification($_POST['login'], $_POST['mdp'])));
//print(json_encode(utilisateurDAO::authentification(1, 1)));
