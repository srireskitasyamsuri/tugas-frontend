<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
}

// class Device
// {
    // private static $devices = [
    //     [
    //         "id" => 1,
    //         "name" => "Sensor Suhu",
    //         "min_value" => 0,
    //         "max_value" => 100,
    //         "current_value" => 25
    //     ],
    //     [
    //         "id" => 2,
    //         "name" => "Kipas Angin",
    //         "min_value" => 0,
    //         "max_value" => 5,
    //         "current_value" => 2
    //     ],
    //     [
    //         "id" => 3,
    //         "name" => "Lampu Kamar",
    //         "min_value" => 0,
    //         "max_value" => 100,
    //         "current_value" => 50
    //     ],
    //     [
    //         "id" => 4,
    //         "name" => "Lampu Taman",
    //         "min_value" => 0,
    //         "max_value" => 1,
    //         "current_value" => 1
    //     ]
    // ];

    // public static function all(){
    //     return collect(self::$devices);
    // }

    // public static function find($id){
    //     $devices = static::$all();
    //     return $devices->firstWhere('id', $id);
    // }
// }