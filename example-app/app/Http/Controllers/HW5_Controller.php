<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HW5_Controller extends Controller
{
    private $myvar = "Hello World";

    function _construct() //HW5_Controller
    {

    }

    /* HOMEWORK 5 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 */
    public function index(){
        return view('HW5_Form');
    }
}
