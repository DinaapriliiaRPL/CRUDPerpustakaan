<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Modelbuku;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Stmt\Return_;

class Buku extends BaseController
{
    //index ini adalah method yang akan dipanggil ke routes
    public function index(): string
    {
       return view('layout/v_buku');
       //panggil folder layout file v_buku
    }

    public function tampil()
    {
        $model= new Modelbuku();
        $data= $model->findAll();
        $hasil= [
            "dina"=>$data
        ];
        return view('buku/views_buku',$hasil);
    }
    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $model= new Modelbuku();
        $data= [
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
        ];
        $model->insert($data);
        return redirect()->to('/buku');
    }

    public function edit()
    {
        // $model= new Modelbuku();
        return view('buku/edit', $this->request->getPost());
    }

    public function update()
    {
        $model= new Modelbuku();
        $id_buku= $this->request->getPost();
        $data= [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        
        $model->update($id_buku, $data);
        return redirect()->to('/buku');
    }

    // public function delete($dina)
    // {
    //     $model= new Modelbuku();
    //     $model->delete($dina);
    //     return redirect()->to('/buku');
    // }

    public function hapus()
    {
        $id = $this->request->getPost('id_buku');
        $model = new Modelbuku();
        $model->delete($id);

        return redirect()->to('/buku');

    }
}
