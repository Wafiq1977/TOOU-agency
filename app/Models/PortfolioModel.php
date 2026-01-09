<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['service_id', 'title', 'description', 'image_path'];
    protected $useTimestamps = true;
}