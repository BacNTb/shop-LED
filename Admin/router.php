<?php
namespace Mvc\Router;

session_start();

class Router
{
    static public function parse($url, $request)
    {
        $url = trim($url);

        if(isset($_SESSION['username'])) 
        {
            if ($url == "/shop/bshop/admin/")
            {
                $request->controller = "leds";
                $request->action = "index";
                $request->params = [];
            }
            else
            {
                $explode_url = explode('/', $url);
                $explode_url = array_slice($explode_url, 4);
                $request->controller = $explode_url[0];
                $request->action = $explode_url[1];
                $request->params = array_slice($explode_url, 2);
            }

        } else {
            $request->controller = "admins";
            $request->action = "login";
            $request->params = ['', ''];
        }
    }
}