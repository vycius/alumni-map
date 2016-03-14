<?php

class Marker_model extends CI_Model
{

    public function getMarker($number)
    {
        $color = '255,255,255';
        list($r, $g, $b) = explode(',', $color);
        $imgname = 'public/img/marker.png';
        $fontType = 'public/fonts/arial.ttf';
        if (!is_numeric($number))
            $text = 1;
        else
            $text = intval($number);


        if ($text < 10) {
            $fontSize = 13;
            $x = 6;
            $y = 17;
        } else if ($text < 100) {
            $x = 3;
            $y = 16;
            $fontSize = 10;
        } else {
            $x = 2;
            $y = 16;
            $fontSize = 8;
        }
        $rot = 0;


        if (!is_readable($fontType)) {
            echo('Error: The server is missing the specified font.');
        }

        $img = imagecreatefrompng($imgname);

        $fontColor = imagecolorallocate($img, $r, $g, $b);

        ImageTTFText($img, $fontSize, $rot, $x, $y, $fontColor, $fontType, $text);

        return $img;
    }

}
