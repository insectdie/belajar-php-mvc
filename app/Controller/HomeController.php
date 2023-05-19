<?php

namespace insectdie\Belajar\PHP\MVC\Controller;

use insectdie\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index() : void 
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari insectdie"
        ];
        
        View::render('Home/index', $model);
    }
    
    function hello() : void 
    {
        echo "HomeController.hello()";  
    }
    function world() : void 
    {
        echo "HomeController.world()";  
    }
}