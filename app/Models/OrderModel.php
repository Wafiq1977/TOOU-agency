<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'service_id', 'details', 'file_path', 'status', 'payment_status'];
    protected $useTimestamps = true;
}