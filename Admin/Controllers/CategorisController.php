<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;
use Mvc\Models\LedModel;
use Mvc\Models\LedRepository;

class CategorisController extends Controller
{

    private $CateRepository;

    public function __construct(){
        $this->CateRepository = new CateRepository();
    }

    function cate($page)
    {
        $newCate = new CateModel();
        $d['cate'] = $this->CateRepository->showAll($newCate);
        $this->set($d);

        $newLed = new LedModel();
        $req = new LedRepository();
        $d['led'] = $req->showAll($newLed);
        $this->set($d);

        if($page == 'home') {
            $this->render("home");

        } else {
            $this->render("cate");
        }
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            $Cate= new CateModel();
            $Cate->setName($_POST["name"]);
            $Cate->setDescription($_POST["description"]);
            $Cate->setStatus($_POST["status"]);
            $Cate->setCreate_at(date("Y-m-d h:i:s"));

            if ($this->CateRepository->add($Cate))
            {
                header("Location: " . WEBROOT . "categoris/cate/home");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $Cate= new CateModel();
        $Cate->setId($id);

        if (isset($_POST["name"]))
        {
            $Cate->setName($_POST["name"]);
            $Cate->setName($_POST["name"]);
            $Cate->setDescription($_POST["description"]);
            $Cate->setStatus($_POST["status"]);
            $Cate->setUpdate_at(date("Y-m-d h:i:s"));

            if ($this->CateRepository->update($Cate))
            {
                header("Location: " . WEBROOT . "categoris/cate/");
            }
        }

        $d["Cate"] = $this->CateRepository->getId($id);

        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $Cate = new CateModel();
        $Cate->setId($id);
        if ($this->CateRepository->delete($Cate))
        {
            header("Location: " . WEBROOT . "categoris/cate/");
        }
    }
}


