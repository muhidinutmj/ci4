<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'students' => [
                ['id' => 1, 'name' => 'Muhidin', 'nim' => '1234567890', 'email' => 'muhidin@example.com'],
                ['id' => 2, 'name' => 'Siti', 'nim' => '0987654321', 'email' => 'siti@example.com'],
                ['id' => 3, 'name' => 'Ahmad', 'nim' => '1122334455', 'email' => 'ahmad@example.com'],
            ]
        ];
        return view('student/index', $data);
    }
}
