<?php

namespace App\Controllers;

use App\Core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            "name" => "ahmed sadek",
        ];
        return $this->render("home", $params);
    }
    public function contact()
    {
        return $this->render("contact");
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";
        return "handleContact sumbitted ";
    }
}
