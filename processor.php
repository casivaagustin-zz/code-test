<?php

class Process {

    protected $input;
    public $full_name = 'Not Found';
    public $phone_number = 'Not Found';
    public $email = 'Not Found';
    public $address = 'Not Found';

    public function __construct($input) {
        $this->input = $input;
    }

    public function parseInput() {
        $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,6})(?:\.[a-z]{2})?/i';
        preg_match_all($pattern, $this->input, $matches);
        if (!empty($matches[0])) {
            $this->email = trim($matches[0][0]);
            $this->input = str_replace($this->email, '', $this->input);
        }

        $matches = [];
        $pattern = '/[0-9]{3}[\.]*[\s]*[0-9]{3}[\.]*[\s]*[0-9]{4}[\.]*[\s]*[\-]*[0-9]*|[0-9]{3}[\-][0-9]{6}|[0-9]{3}[\s][0-9]{6}|[0-9]{3}[\s][0-9]{3}[\s][0-9]{4}|[0-9]{9}|[0-9]{3}[\-][0-9]{3}[\-][0-9]{4}|[\(][0-9]{3}[\)][\s]*[0-9]{3}[\-][0-9]{4}/';
        preg_match_all($pattern, $this->input, $matches);
        if (!empty($matches[0])) {
            $this->phone_number = trim($matches[0][0]);
            $this->input = str_replace($this->phone_number, ' ', $this->input);
        }

        $matches = [];
        $pattern = '/[A-Za-z\s]*[0-9]{1,10000},[A-Za-z0-9\s]*,[\s][A-Z]{2}[\s][0-9]{5}|[0-9]{1,10000}[A-Za-z\s]*,[A-Za-z0-9\s]*,[\s][A-Z]{2}[\s][0-9]{5}/';
        preg_match_all($pattern, $this->input, $matches);

        if (!empty($matches[0])) {
            $this->address = trim($matches[0][0]);
            $this->input = str_replace($this->address, ' ', $this->input);
        }
        $this->input = preg_replace("/[\s][\-\_\,\(,\)][\s]/", "", $this->input);
        $this->full_name = trim($this->input);
    }

    public function getParsedInputObject() {
        return json_encode($this);
    }
}