<?php

namespace Mvc\Controllers;

use Mvc\Config\Database;

use Mvc\Core\Controller;

use Mvc\Models\LedModel;

use Mvc\Models\LedRepository;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;

use Mvc\Models\CustommerModel;

use Mvc\Models\CustommerRepository;

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

        $this->render("index");
    }


    function login()
    {
        $this->render("login");
    }

    function contact()
    {
        $this->render("contact");
    }

    function categori($id)
    {
        $newLed = new LedModel();

        if ($id == 'all') {
            $newLed = new LedModel();
            $d['led'] = $this->LedRepository->showAll($newLed);
        } else {
            $arr = $this->LedRepository->showAll($newLed);

            $d['led'] = [];

            foreach ($arr as $key => $value) {

                if ($value['categori_id'] == $id) {
                    $d['led'][$key] = $value;
                }
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

        $this->render("categori");
    }


    public function cart($id, $quantity)
    {
        
        if (isset($_SESSION['cart'][$id])) {
            
            if (isset($_POST['sum'])) {

                foreach ($_POST['sum'] as $id => $sum) {
                    if ($sum == 0) {
                        unset($_SESSION['cart'][$id]);
                    } elseif ($sum > 0) {

                        $_SESSION['quantity'][$id] = $sum;
                    }
                }
            } else {

                if($quantity != '0') {
                    $_SESSION['quantity'][$id] = $_SESSION['quantity'][$id] + $quantity;
                }
            }
        } else {

            $_SESSION['cart'][$id] = 1;
            $_SESSION['quantity'][$id] = $quantity;
        }

        if(isset($_SESSION['cart'])) {

            $arrId = [];

            foreach ($_SESSION['cart'] as $id => $value) {
                if($id != 'all') {
                    $arrId[] = $id;
                }
            }

            $Led = new LedModel();
            $Led->setId($id);
            $arrLed = $this->LedRepository->showAll($Led);

            $d['led'] = [];
            foreach ($arrLed as $keyLed => $valueLed) {

                foreach ($arrId as $keyArr => $valueArr) {

                    if ($valueLed['id'] == $valueArr) {

                        $d['led'][$keyArr] = $valueLed;
                    }
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
        }

        $this->render("cart");
    }

    function checkout()
    {
        
        if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
    
            $address = $_POST["village"] . '-' . $_POST["district"] . '-' . $_POST["city"];
            foreach ($quantity as $id => $value) {
             
                $Cus = new CustommerModel();
                $req = new CustommerRepository();
    
                $Cus->setName($_POST["name"]);
                $Cus->setLed_id($id);
                $Cus->setCount($value);
                $Cus->setPrice($price);
                $Cus->setAddress($address);
                $Cus->setTell($_POST["tell"]);
                $Cus->setCreate_at($_POST["create_at"]);
    
                $req->add($Cus);                         
            }
            if($req->add($Cus)) {
                unset($_SESSION['cart']);
            }

            $this->index();

        }

        
        if(isset($_SESSION['cart'])) {
            
            $arrId = [];
        

            foreach ($_SESSION['cart'] as $id => $value) {
                $arrId[] = $id;
            }

            $Led = new LedModel();
            $Led->setId($id);
            $arrLed = $this->LedRepository->showAll($Led);

            $d['led'] = [];
            foreach ($arrLed as $keyLed => $valueLed) {

                foreach ($arrId as $keyArr => $valueArr) {

                    if ($valueLed['id'] == $valueArr) {

                        $d['led'][$keyArr] = $valueLed;
                    }
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

            $this->render("checkout");
        }
    }

    function product($id)
    {
        $Led = new LedModel();
        $Led->setId($id);
        $d["Led"] = $this->LedRepository->getId($id);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        $this->render("product");
    }
}
