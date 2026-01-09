<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Order extends BaseController
{
    public function index()
    {
        $serviceModel = new \App\Models\ServiceModel();
        $data['services'] = $serviceModel->findAll();

        return view('order', $data);
    }

    public function submit()
    {
        $orderModel = new \App\Models\OrderModel();

        $file = $this->request->getFile('file');
        $filePath = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);
            $filePath = $newName;
        }

        $data = [
            'user_id' => 1, // Dummy, assume logged in user
            'service_id' => $this->request->getPost('service_id'),
            'details' => $this->request->getPost('details'),
            'file_path' => $filePath,
            'status' => 'pending',
            'payment_status' => 'unpaid',
        ];

        $orderModel->insert($data);

        return redirect()->to('/')->with('success', 'Pesanan berhasil dikirim!');
    }
}