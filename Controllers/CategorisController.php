<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;

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

        if($page == 'home') {
            $this->render("home");

        } else {
            $this->render("cate");
        }
    }
}


