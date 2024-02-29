<?php

namespace App\Models;

use CodeIgniter\Model;

class Sensor3Model extends Model
{
   protected $table = 'sensor3';

   protected $useAutoIncrement = true;
   protected $allowedFields = ['suhu', 'kelembaban', 'waktu'];

   protected $useTimestamps = true;
   protected $createdField  = 'waktu';
}