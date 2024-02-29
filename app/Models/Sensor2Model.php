<?php

namespace App\Models;

use CodeIgniter\Model;

class Sensor2Model extends Model
{
   protected $table = 'sensor2';

   protected $useAutoIncrement = true;
   protected $allowedFields = ['suhu', 'kelembaban', 'waktu'];

   protected $useTimestamps = true;
   protected $createdField  = 'waktu';
}