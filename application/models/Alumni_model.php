<?php

class alumni_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getAlumniMembers()
    {
        $query = $this->db->query('SELECT * FROM `alumni` ORDER BY id DESC');

        return $query->result_array();
    }

    public function getAlumniLocations()
    {
        $query = $this->db->query('SELECT COUNT(*) AS quantity, CONCAT(`city`,\' \', `country`) AS location, `coordinates` FROM `alumni` GROUP BY `coordinates`');

        return $query->result_array();
    }

    public function getCoordinates($country, $city)
    {

        $address = $country . ',' . $city;
        $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern

        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

        $response = file_get_contents($url);

        $json = json_decode($response, TRUE); //generate array object from the response from the web

        return ($json['results'][0]['geometry']['location']['lat'] . "," . $json['results'][0]['geometry']['location']['lng']);

    }

    public function registerMember($name, $lastName, $lastNameG, $country, $city, $year, $email, $job)
    {
        $data = array(
            'name' => $name,
            'lastName' => $lastName,
            'lastNameG' => $lastNameG,
            'country' => $country,
            'laida' => $year,
            'work' => $job,
            'mail' => $email,
            'city' => $city,
            'Coordinates' => $this->getCoordinates($country, $city)
        );

        return $this->db->insert('alumni', $data);
    }
}
