<?php

namespace App\Models;

use CodeIgniter\Model;

class Sensor4Model extends Model
{
   protected $table = 'sensor4';

   protected $useAutoIncrement = true;
   protected $allowedFields = ['suhu', 'kelembaban', 'waktu'];

   protected $useTimestamps = true;
   protected $createdField  = 'waktu';
}