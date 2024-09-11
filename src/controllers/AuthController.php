<?php
namespace App\Controllers;

use App\Core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout("auth");
        if ($request->isGet()) {
            return $this->render("login");
        }
        if ($request->isPost()) {
            return "post login";
        }
    }

    public function register(Request $request)
    {
        $this->setLayout("auth");
        if ($request->isGet()) {
            return $this->render("register");
        }
        if ($request->isPost()) {
            return "post register";
        }
    }
}