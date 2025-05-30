<?php


namespace App\Http;


class Helpers
{
    public static function upload_image($image, $path = "") {
        // dd($image, $path);
        $fileName = time() . rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        // dd($fileName);
        $p = $image->move($path, $fileName);
        // dd($p);
        if ($p) {
            return $fileName;
        } else {
            return "default.png";
        }
    }

    public static function getDifferntDay($start, $end)
    {
        $diff = abs(strtotime($end) - strtotime($start));

        $years = round(floor($diff / (365*60*60*24)),0);
        $months = round(floor(($diff - $years * 365*60*60*24) / (30*60*60*24)),0);
        $days = round(floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)),0);

        if($years){
            $total = " years =".$years;
        }elseif($months && $years){
            $total = " years =".$years." month = ".$months;
        }else{
            $total = " month = ".$months;
        }
        return $total;
    }
}
