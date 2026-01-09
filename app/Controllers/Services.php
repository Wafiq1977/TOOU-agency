<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        // Load model
        $serviceModel = new \App\Models\ServiceModel();
        $data['services'] = $serviceModel->findAll();

        return view('services', $data);
    }
}