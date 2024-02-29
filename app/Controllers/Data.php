<?php

namespace App\Controllers;

use App\Models\Sensor1Model;
use App\Models\Sensor2Model;
use App\Models\Sensor3Model;
use App\Models\Sensor4Model;
use App\Models\Sensor5Model;


class Data extends BaseController
{
   protected $sensor1;
   protected $sensor2;
   protected $sensor3;
   protected $sensor4;
   protected $sensor5;
   public function __construct()
   {
      $this->sensor1 = new Sensor1Model();
      $this->sensor2 = new Sensor2Model();
      $this->sensor3 = new Sensor3Model();
      $this->sensor4 = new Sensor4Model();
      $this->sensor5 = new Sensor5Model();
   }

   public function save()
   {
      dd($this->request->getVar());

      function saveData($a)
      {
         $sensor = 'sensor' . $a;
         $temp = 'temperature' . $a;
         $hum = 'humidity' . $a;

         echo $sensor . "<br>";
         echo $temp . "<br>";
         echo $hum . "<br>";

         // $this->$sensor->save([
         //    'suhu' => $this->request->getVar($temp),
         //    'kelembaban' => $this->request->getVar($hum)
         // ]);
      }

      // $this->sensor1->save([
      //    'suhu' => $this->request->getVar('temperature1'),
      //    'kelembaban' => $this->request->getVar('humidity1')
      // ]);
      // $this->sensor2->save([
      //    'suhu' => $this->request->getVar('temperature2'),
      //    'kelembaban' => $this->request->getVar('humidity2')
      // ]);
      // $this->sensor3->save([
      //    'suhu' => $this->request->getVar('temperature3'),
      //    'kelembaban' => $this->request->getVar('humidity3')
      // ]);
      // $this->sensor4->save([
      //    'suhu' => $this->request->getVar('temperature4'),
      //    'kelembaban' => $this->request->getVar('humidity4')
      // ]);
      // $this->sensor5->save([
      //    'suhu' => $this->request->getVar('temperature5'),
      //    'kelembaban' => $this->request->getVar('humidity5')
      // ]);
   }

   public function lt4()
   {
      $data['sensor1'] = $this->sensor1->orderBy('waktu', 'desc')->first();
      $data['sensor2'] = $this->sensor2->orderBy('waktu', 'desc')->first();
      $data['sensor3'] = $this->sensor3->orderBy('waktu', 'desc')->first();
      $data['sensor4'] = $this->sensor4->orderBy('waktu', 'desc')->first();
      $data['sensor5'] = $this->sensor5->orderBy('waktu', 'desc')->first();

      function sum(...$numbers)
      {
         $sum = 0;
         foreach ($numbers as $n) {
            $sum += $n;
         }
         $avg = $sum / count($numbers);
         return (float)$avg;
      }

      $bssSuhu = sum($data['sensor1']['suhu'], $data['sensor2']['suhu'], $data['sensor3']['suhu']);
      $bssKelem = sum($data['sensor1']['kelembaban'], $data['sensor2']['kelembaban'], $data['sensor3']['kelembaban']);
      $data['BSS'] = ["suhu" => $bssSuhu, "kelembaban" => $bssKelem];

      $rectiSuhu = sum($data['sensor4']['suhu'], $data['sensor5']['suhu']);
      $rectiKelem = sum($data['sensor4']['kelembaban'], $data['sensor5']['kelembaban']);
      $data['recti'] = ["suhu" => $rectiSuhu, "kelembaban" => $rectiKelem];

      return json_encode($data);
   }
}
