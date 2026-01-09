<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $blogModel = new \App\Models\BlogModel();
        $data['blogs'] = $blogModel->findAll();

        return view('blog', $data);
    }
}