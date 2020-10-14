<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\AdminModel;

use Mvc\Models\AdminRepository;


class AdminsController extends Controller
{

    private $AdminRepository;

    public function __construct(){
        $this->AdminRepository = new AdminRepository();
    }

    function admin($page)
    {   
        $newAdmin = new AdminModel();
        $d['admin'] = $this->AdminRepository->showAll($newAdmin);
        $this->set($d);

        if($page == 'home') {
            $this->render("home");

        } else {
            $this->render("admin");
        }
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            $Admin= new AdminModel();
            $Admin->setName($_POST["name"]);
            $Admin->setUsername($_POST["username"]);
            $Admin->setPassword($_POST["password"]);
            $Admin->setEmail($_POST["email"]);
            $Admin->setTell($_POST["tell"]);
            $Admin->setCreate_at($_POST["create_at"]);

            if ($this->AdminRepository->add($Admin))
            {
                header("Location: " . WEBROOT . "admins/admin");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $Admin= new AdminModel();
        $Admin->setId($id);

        if (isset($_POST["name"]))
        {
            $Admin->setName($_POST["name"]);
            $Admin->setUsername($_POST["username"]);
            $Admin->setPassword($_POST["password"]);
            $Admin->setEmail($_POST["email"]);
            $Admin->setTell($_POST["tell"]);
            $Admin->setUpdate_at($_POST["update_at"]);

            if ($this->AdminRepository->update($Admin))
            {
                header("Location: " . WEBROOT . "leds/index");
            }
        }

        $d["Admin"] = $this->AdminRepository->getId($id);

        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $Admin = new AdminModel();
        $Admin->setId($id);
        if ($this->AdminRepository->delete($Admin))
        {
            header("Location: " . WEBROOT . "admins/admin");
        }
    }

    function login($out)
    {
        if(isset($_POST['submit'])) {
            $repone = new AdminRepository();
            $resuft =  $repone->check($_POST['username'], $_POST['password']);
            if($resuft) {
                $_SESSION['username'] = $resuft['username'];
                $_SESSION['name'] = $resuft['name'];
                
                header('Location: /admin/leds/index');
            }
            
        }
        if($out == 'out') {
            unset($_SESSION['username']);
        }
        
        $this->render("login");
    }
}

