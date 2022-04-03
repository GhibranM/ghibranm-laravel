<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ghibran extends Model
{
    private static $namaku="Ghibran Muhammad Cakep";

    public static function getNama()
    {
        return self::$namaku;
    }

    public static function getRumah($id)
    {
        if(id === 1)
        {
            $rumah="Rumah ada di jalan candi pangggung no 11";
        }else{
            $rumah="Rumah ada di kabupaten kudus jawa tengah";
        }
        return $rumah;
    }

    public static function getArrayku()
    {
        $data=collect([1,2,3,4,5]);
       // $total='';
       // foreach($data as $d)
       // {
       //     $total = (int)$total + (int)$d;
       // }
       // return $total;
       return $data -> sum();
    }
}
