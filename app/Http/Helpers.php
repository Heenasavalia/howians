<?php


namespace App\Http;


class Helpers
{
    public static function upload_image($image, $path = "") {
        // dd($image, $path);
        $fileName = time() . rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        // dd($fileName);
        $p = $image->move($path, $fileName);
        dd($p);
        if ($p) {
            return $fileName;
        } else {
            return "default.png";
        }
    }
}
