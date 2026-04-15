<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data = [
            'title' => 'Mahasiswa',
            'students' => $model->findAll(),
        ];
        return view('student/index', $data);
    }
}
