<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use PHPUnit\Util\Json;
use ResponseTrait;

class Productos extends BaseController
{

    // methos to show views
    public function index()
    {
        return view('productos/index');
    }

    public function orders()
    {
        return view('productos/orders');
    }

    public function newOrder(){
        return view('productos/newOrder');
    }

    
}
