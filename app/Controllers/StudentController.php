<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentModel;

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
