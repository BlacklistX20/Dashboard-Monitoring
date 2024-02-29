<?php

namespace App\Models;

use CodeIgniter\Model;

class Sensor1Model extends Model
{
   protected $table = 'sensor1';

   protected $useAutoIncrement = true;
   protected $allowedFields = ['suhu', 'kelembaban', 'waktu'];

   protected $useTimestamps = true;
   protected $createdField  = 'waktu';
}