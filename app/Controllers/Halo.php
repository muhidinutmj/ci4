<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Halo extends BaseController
{
    public function index()
    {
        return view('halo_view');
    }
}
