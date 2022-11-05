<?php

namespace Controller\Website;

use Model\Users;
use Model\UsersManager;

class WebsiteController
{
    private $usersManager;

    public function __construct()
    {
        $this->usersManager = new UsersManager;
    }
    public function home()
    {
        require('view/website/home.view.php');
    }

    public function register()
    {
        if (!empty($_POST)) {
            $errors = [];
            $registrationComplete = "";
            $registrationError = "";
            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars(trim($value));
            }
            extract($_POST);
            if (!preg_match('/^\w{0,}$/', $username)) {
                $errors[] = "Le pseudonyme ne peut que contenir que des lettres, chiffres et underscore ( _ ).";
            }
            if (strlen($username) > 30 || strlen($username) < 3) {
                $errors[] = "Le pseudonyme doit faire entre 3 et 30 caractères.";
            }
            if (!preg_match('/^[a-zA-Z]{0,}$/', $firstname)) {
                $errors[] = "Le prénom ne peut que contenir des lettres.";
            }
            if (strlen($firstname) > 30 || strlen($firstname) < 3) {
                $errors[] = "Le prénom doit faire entre 3 et 30 caractères.";
            }
            if (!preg_match('/^[a-zA-Z]{0,}$/', $lastname)) {
                $errors[] = "Le nom ne peut que contenir des lettres.";
            }
            if (strlen($lastname) > 30 || strlen($lastname) < 3) {
                $errors[] = "Le nom doit faire entre 3 et 30 caractères.";
            }
            if ($password !== $confirmpwd) {
                $errors[] = "Le mot de passe entré et le mot de passe de confirmation ne correspondent pas.";
            }
            if (!preg_match('/^[\w@^#-]{0,}$/', $password)) {
                $errors[] = "Le mot de passe ne peut que contenir que des lettres, chiffres et les caractères spéciaux suivants : @ ^ # - _.";
            }
            if (strlen($password) > 30 || strlen($password) < 8) {
                $errors[] = "Le mot de passe doit faire entre 8 et 30 caractères.";
            }

            if (empty($errors)) {
                $usernameExists = $this->usersManager->usernameExists($username);
                if (!$usernameExists) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $user = new Users(null, $username, $firstname, $lastname, 'classic', $password);
                    $this->usersManager->register($user);
                    $registrationComplete = "Votre inscription est terminée. Pour vous connecter, allez sur la <a href='?action=connection'>page de connexion</a>.";
                } else {
                    $registrationError = "Le pseudo choisi existe déjà dans la base de données";
                }
            }
        }
        require('view/website/register.view.php');
    }

    public function connection()
    {
        
        require('view/website/connection.view.php');
    }
}
