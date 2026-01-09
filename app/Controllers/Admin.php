<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $orderModel = new \App\Models\OrderModel();
        $data['orders'] = $orderModel->findAll();

        return view('admin/dashboard', $data);
    }

    public function orders()
    {
        $orderModel = new \App\Models\OrderModel();
        $data['orders'] = $orderModel->findAll();

        return view('admin/orders', $data);
    }

    public function services()
    {
        $serviceModel = new \App\Models\ServiceModel();
        $data['services'] = $serviceModel->findAll();

        return view('admin/services', $data);
    }

    public function updateOrderStatus($id)
    {
        $orderModel = new \App\Models\OrderModel();
        $status = $this->request->getPost('status');
        $orderModel->update($id, ['status' => $status]);

        return redirect()->to('/admin/orders');
    }
}