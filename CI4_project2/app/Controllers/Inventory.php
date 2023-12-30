<?php

namespace App\Controllers;

use App\Models\InventoryModel;

class Inventory extends BaseController
{
    protected $namapakaian;

    public function __construct()
    {
        $this->namapakaian = new InventoryModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Stock Inventory',
            'namapakaian' => $this->namapakaian->findAll()
        ];
        return view('inventory/index', $data);
    }

    public function insert()
    {
        if (!$this->validate([
            'namapakaian' => 'required',
            'deskripsi' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'kode_pakaian' => 'required',
            'stok' => 'required',
            'hargapakaian' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            $errorMessages = $validation->getErrors();
            $errorString = implode('<br>', $errorMessages);
            session()->setFlashdata('validationErrors', $errorString);
            return redirect()->to(base_url('/inventory'))->withInput()->with('showModalInsert', true);
        }

        $this->namapakaian->save([
            'namapakaian' => $this->request->getVar('namapakaian'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'ukuran' => $this->request->getVar('ukuran'),
            'warna' => $this->request->getVar('warna'),
            'kode_pakaian' => $this->request->getVar('kode_pakaian'),
            'stok' => $this->request->getVar('stok'),
            'hargapakaian' => $this->request->getVar('hargapakaian'),
        ]);

        session()->setFlashdata('message', 'The new category has been successfully added!');
        return redirect()->to(base_url('/inventory'));
    }
}
