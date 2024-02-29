<?php

namespace App\Models;

use CodeIgniter\Model;

class Sensor5Model extends Model
{
   protected $table = 'sensor5';

   protected $useAutoIncrement = true;
   protected $allowedFields = ['suhu', 'kelembaban', 'waktu'];

   protected $useTimestamps = true;
   protected $createdField  = 'waktu';
}