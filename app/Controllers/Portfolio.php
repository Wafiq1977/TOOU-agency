<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        $portfolioModel = new \App\Models\PortfolioModel();
        $data['portfolios'] = $portfolioModel->findAll();

        return view('portfolio', $data);
    }
}