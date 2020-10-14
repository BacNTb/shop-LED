<?php

namespace Mvc\Controllers;

use Mvc\Config\Database;

use Mvc\Core\Controller;

use Mvc\Models\LedModel;

use Mvc\Models\LedRepository;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;

use Mvc\Models\ImgModel;

use Mvc\Models\ImgRepository;

class LedsController extends Controller
{

    private $LedRepository;

    public function __construct()
    {
        $this->LedRepository = new LedRepository();
    }

    function index()
    {
        $this->render("index");
    }

    function login()
    {
        $this->render("login");
    }

    function home()
    {
        $newLed = new LedModel();
        $d['led'] = $this->LedRepository->showAll($newLed);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        $this->render("home");
    }

    function homeCateId($id)
    {
        $newLed = new LedModel();
        $arr = $this->LedRepository->showAll($newLed);

        $d['led'] = [];

        foreach ($arr as $key => $value) {
            
            if($value['categori_id'] == $id) {
                $d['led'][$key] = $value;
            }       
        }
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        $this->render("homecateid");
    }

    function create()
    {
        if (isset($_POST["name"])) {

            $Led = new LedModel();
            $Img = new ImgModel();
            $req = new ImgRepository();

            $Led->setName($_POST["name"]);
            $Led->setDescription($_POST["description"]);
            $Led->setPrice($_POST["price"]);
            $Led->setCategori_id($_POST["categori_id"]);
            $Led->setCreate_at($_POST["create_at"]);

            if ($this->LedRepository->add($Led)) {
                $conn = new Database();

                $id = $conn->getBdd()->lastInsertId();

                if (isset($_FILES["image"])) {

                    $fileUpload = $_SERVER['DOCUMENT_ROOT'] . '/admin/views/img/';

                    $file = $_FILES["image"]['name'];

                    foreach ($file as $key => $name) {

                        if ($name == UPLOAD_ERR_OK) {

                            $tmp_name = $_FILES["image"]["tmp_name"][$key];
                            $name = basename($_FILES["image"]["name"][$key]);
                            move_uploaded_file($tmp_name, "$fileUpload/$name");


                            $Img->setLed_id($id);
                            $Img->setName($name);
                            $Img->setCreate_at($_POST["create_at"]);

                            $req->add($Img);
                        }
                    }

                    header("Location: " . WEBROOT . "leds/home");
                }
            }
        }

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $this->render("create");
    }

    function edit($id)
    {
        $Led = new LedModel();
        $Led->setId($id);

        $Img = new ImgModel();
        $rep = new ImgRepository();
        $Img->setId($id);
        $Img->setLed_id($id);


        if (isset($_POST["name"])) {
            $Led->setCategori_id($_POST["categori_id"]);
            $Led->setName($_POST["name"]);
            $Led->setDescription($_POST["description"]);
            $Led->setPrice($_POST["price"]);
            $Led->setUpdate_at($_POST["update_at"]);

            if ($this->LedRepository->update($Led)) {

                $rep->deleteImg($Img);

                $fileUpload = $_SERVER['DOCUMENT_ROOT'] . '/admin/views/img/';

                $file = $_FILES["image"]['name'];

                foreach ($file as $key => $name) {

                    if ($name == UPLOAD_ERR_OK) {

                        $tmp_name = $_FILES["image"]["tmp_name"][$key];
                        $name = basename($_FILES["image"]["name"][$key]);
                        move_uploaded_file($tmp_name, "$fileUpload/$name");


                        $Img->setLed_id($id);
                        $Img->setName($name);
                        $Img->setCreate_at($_POST["create_at"]);
                        $Img->setUpdate_at($_POST["update_at"]);

                        $rep->update($Img);
                    }
                }

                header("Location: " . WEBROOT . "leds/home");
            }
        }

        $d["Led"] = $this->LedRepository->getId($id);
        $this->set($d);

        $d["img"] = $rep->showAll($Img);
        $this->set($d);

        $Cate = new CateModel();
        $req = new CateRepository();

        $d['cate'] = $req->showAll($Cate);
        $this->set($d);

        $this->render("edit");
    }

    function delete($id)
    {
        $Led = new LedModel();
        $Led->setId($id);

        $Img = new ImgModel();
        $rep = new ImgRepository();
        $Img->setId($id);
        $Img->setLed_id($id);

        if ($this->LedRepository->delete($Led)) {
            if ($rep->deleteImg($Img)) {

                header("Location: " . WEBROOT . "leds/home");
            }
        }
    }
}
