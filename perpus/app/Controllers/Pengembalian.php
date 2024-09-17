<?php 
namespace App\Controllers;

use App\Models\PengembalianModel;

class Pengembalian extends BaseController
{
    protected $pengembalianModel;

    public function __construct()
    {
        $this->pengembalianModel = new PengembalianModel();
    }

    public function index()
    {
        $data['pengembalian'] = $this->pengembalianModel->findAll();
        return view('pengembalian/index', $data);
    }

    public function create()
    {
        return view('pengembalian/create');
    }

    public function store()
    {
        $this->pengembalianModel->save([
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d'),
        ]);

        return redirect()->to('/pengembalian');
    }

    public function edit($id)
    {
        $data['pengembalian'] = $this->pengembalianModel->find($id);
        return view('pengembalian/edit', $data);
    }

    public function update($id)
    {
        $this->pengembalianModel->update($id, [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $this->request->getPost('TanggalPengembalian'),
        ]);

        return redirect()->to('/pengembalian');
    }

    public function delete($id)
    {
        $this->pengembalianModel->delete($id);
        return redirect()->to('/pengembalian');
    }
}
