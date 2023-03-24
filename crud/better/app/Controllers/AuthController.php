<?php

namespace Autobots\Blog\Controllers;

use Autobots\Blog\Library\ResponseHandler;
use Autobots\Blog\Models\User;

class AuthController
{
    public function loginView()
    {
        return ResponseHandler::renderView('auth/login', []);
    }

    public function checkUser()
    {
        try {
            $userObj = new User();

            $user = $userObj->findByEmail($_POST['email']);

            if (!password_verify($_POST['password'], $user->password)) {
                throw new \Exception('User email and password does not matach');
            }

            unset($user->password);

            $_SESSION['is_user_logged_in'] = true;
            $_SESSION['logged_in_user_name'] = $user->name;

            header('Location: /');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function logout()
    {
        session_destroy();

        header('Location: /login');
    }
}
