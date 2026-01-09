<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $testimonialModel = new \App\Models\TestimonialModel();
        $serviceModel = new \App\Models\ServiceModel();

        $data['testimonials'] = $testimonialModel->findAll();
        $data['services'] = $serviceModel->findAll();

        return view('home', $data);
    }
}
