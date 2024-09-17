<?php

namespace App\Controllers;

use App\Models\Modeluser;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = new Modeluser();
        $data['users'] = $model->findAll();
        return view('user/awal', $data);
    }

    public function create()
    {
        return view('user/usercreate');
    }

    public function store()
    {
        $model = new Modeluser();
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Password' => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            'Email'    => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat'   => $this->request->getPost('Alamat'),
        ];
        $model->insert($data);
        return redirect()->to('/user');
    }

    public function edits()
    {
        $model = new Modeluser();
        $UserID = $this->request->getVar('UserID');
        $data['user'] = $model->find($UserID);
        return view('user/edit', $data);
    }

    public function update()
    {
        $model= new Modeluser();

        $UserID = $this->request->getVar('UserID');
        $data= [
            'Username' => $this->request->getVar('Username'),
            'Password' => $this->request->getVar('Password'),
            'Emaiil' => $this->request->getVar('Email'),
            'NamaLengkap' => $this->request->getVar('NamaLengkap'),
            'Alamat' => $this->request->getVar('Alamat'),
        ];
        
        $model->update($UserID, $data);
        return redirect()->to('/user');
    }

    public function delete()
    {
        $model = new Modeluser();
        $UserID = $this->request->getVar('UserID');
        if ($model->delete($UserID)) {
            return redirect()->to('/user')->with('message', 'User deleted successfully');
        } else {
            return redirect()->to('/user')->with('error', 'Failed to delete user');
        }
    }
    
       
}
