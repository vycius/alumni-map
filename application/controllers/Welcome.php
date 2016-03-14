<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('alumni_model');
    }


    public function index()
    {
        header('Access-Control-Allow-Origin: *');

        $alumniMembers = $this->alumni_model->getAlumniMembers();
        $alumniLocations = $this->alumni_model->getAlumniLocations();


        $data['title'] = 'JBG Alumni Žemėlapis';
        $data['description'] = 'JBG Alumni išsibarstę po visą pasaulį. Padėk nubraižyti gimnazijos ambasadorių tinklą. Sužinok, kur didžiausia mūsiškių koncentracija. Atrask savus savo kelyje!';
        $data['members'] = $alumniMembers;
        $data['locations'] = $alumniLocations;

        $this->load->view('header', $data);
        $this->load->view('menu', $data);

        if (!empty($_POST)) {
            $name = htmlentities($this->input->post('inputName'));
            $lastName = htmlentities($this->input->post('inputLastname'));
            $lastNameG = htmlentities($this->input->post('inputLastnameG'));
            $country = htmlentities($this->input->post('inputCountry'));
            $city = htmlentities($this->input->post('inputCity'));
            $year = htmlentities($this->input->post('inputYear'));
            $email = htmlentities($this->input->post('inputEmail'));
            $job = htmlentities($this->input->post('inputJob'));

            if ($this->alumni_model->registerMember($name, $lastName, $lastNameG, $country, $city, $year, $email, $job)) {
                $this->load->view('registration_success_dialog');
            }
        }
        
        $this->load->view('welcome_message');
        $this->load->view('map', $data);
        $this->load->view('members', $data);
        $this->load->view('progress', $data);
        $this->load->view('register');

        $this->load->view('footer');
    }

}
