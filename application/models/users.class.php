<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 4/11/2018
 * Time: 4:58 PM
 */

class users extends model{

    public function __construct() {
        parent::__construct();
    }
    public function __set($name,$value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {
    }
    public function getName() {
        return array(
            'userid' => $this->userID,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role' => $this->role
        );
    }
}