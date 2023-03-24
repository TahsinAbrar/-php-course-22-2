<?php

namespace Autobots\Blog\Controllers;

use Autobots\Blog\Library\ResponseHandler;
use Autobots\Blog\Models\User;

class RegistrationController
{
    public function registerView()
    {
        $data = [];

        if (isset($_SESSION['error_message'])) {
            $data['error_message'] = $_SESSION['error_message'];
            // unset($_SESSION['error_message']);
            session_destroy();
        }

        return ResponseHandler::renderView('auth/register', $data);
    }

    public function signup()
    {
        try {
            $user = new User();
            $checkUserExist = $user->findByEmail($_POST['email']);

            if ($checkUserExist) {
                throw new \Exception('User already exists');
            }

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('Email is not valid');
            }

            // plain password
            // $pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$";

            // dd(preg_match($pattern, $_POST['password']));
            // if (preg_match($pattern, $_POST['password'])) {
            //     dd('strong');
            // } else {
            //     dd('weak');
            // }

            $user->save(
                name: htmlspecialchars($_POST['name']),
                email: filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
                password: $_POST['password']
            );

            $_SESSION['is_user_logged_in'] = true;
            $_SESSION['logged_in_user_name'] = $_POST['name'];
    
            header('Location: /');
        } catch (\Exception $exception) {
            $_SESSION['error_message'] = $exception->getMessage(); 

            header('Location: /register');
        }
    }
}
