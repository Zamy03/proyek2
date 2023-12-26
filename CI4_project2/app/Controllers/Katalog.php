<?php

namespace App\Controllers;

class Katalog extends BaseController
{
    public function index()
    {
        return view('katalog/index', $this->data);
    }
}
