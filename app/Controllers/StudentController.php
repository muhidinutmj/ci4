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
        return view('students/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Mahasiswa',
        ];
        return view('students/create', $data);
    }

    public function save()
    {
        $model = new StudentModel();
        $data = [
            'nim' => $this->request->getPost('nim'),
            'name' => $this->request->getPost('name'),
            'pob' => $this->request->getPost('pob'),
            'dob' => $this->request->getPost('dob'),
            'address' => $this->request->getPost('address'),
        ];
        $model->save($data);
        return redirect()->to('/students')->with('success', 'Data mahasiswa berhasil disimpan.')    ;
    }
}
