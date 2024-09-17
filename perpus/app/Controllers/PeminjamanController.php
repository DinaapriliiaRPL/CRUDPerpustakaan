<?php namespace App\Controllers;

use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    protected $peminjamanModel;

    public function __construct()
    {
        $this->peminjamanModel = new PeminjamanModel();
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjamanModel->findAll();
        return view('peminjaman/index', $data);
    }

    public function create()
    {
        return view('peminjaman/create');
    }

    public function store()
    {
        $this->peminjamanModel->save([
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ]);

        return redirect()->to('/peminjaman');
    }

    public function edit($id)
    {
        $data['peminjaman'] = $this->peminjamanModel->find($id);
        return view('peminjaman/edit', $data);
    }

    public function update($id)
    {
        $this->peminjamanModel->update($id, [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $this->request->getPost('TanggalPeminjaman'),
            
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
        ]);

        return redirect()->to('/peminjaman');
    }

    public function delete($id)
    {
        $this->peminjamanModel->delete($id);
        return redirect()->to('/peminjaman');
    }
}
