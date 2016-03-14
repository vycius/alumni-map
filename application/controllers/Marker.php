<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marker extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('marker_model');

    }


    public function index($peopleNumber)
    {
        $img = $this->marker_model->getMarker($peopleNumber);

        imagealphablending($img, false);
        imagesavealpha($img, true);

        header('Content-Disposition: Attachment;filename=marker.png');
        header("Content-type: image/png");
        imagepng($img);
        imagedestroy($img);
    }

}
